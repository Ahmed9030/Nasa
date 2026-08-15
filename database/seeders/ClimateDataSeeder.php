<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class ClimateDataSeeder extends Seeder
{
    /**
     * Seed the application's climate report data.
     */
    public function run(): void
    {
        $this->seedAuthors();
        $this->seedCategories();
        $this->backfillVoyagerDemoPosts();
        $this->seedPosts();
        $this->registerMapFieldsInVoyagerBread();
    }

    protected function seedAuthors(): void
    {
        $names = [
            'Amina Khalil',
            'Dr. Lars Jensen',
            'Sarah Whitfield',
            'Dr. Miguel Herrera',
            'Chen Wei',
            'Grace Okafor',
        ];

        foreach ($names as $name) {
            User::firstOrCreate(
                ['email' => Str::slug($name).'@climatereport.org'],
                [
                    'name' => $name,
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                ]
            );
        }
    }

    protected function seedCategories(): void
    {
        foreach (PostFactory::regions() as $region) {
            Category::firstOrCreate(
                ['slug' => Str::slug($region['category'])],
                ['name' => $region['category'], 'order' => 1]
            );
        }
    }

    protected function backfillVoyagerDemoPosts(): void
    {
        $assignments = [
            'lorem-ipsum-post' => [1, '-122.4,37.8', 300000],
            'my-sample-post' => [2, '139.7,35.7', 300000],
            'latest-post' => [1, '-43.2,-22.9', 300000],
            'yarr-post' => [2, '12.5,55.7', 300000],
        ];

        foreach ($assignments as $slug => [$categoryId, $location, $circleSize]) {
            $post = Post::where('slug', $slug)->first();

            if ($post) {
                $post->update([
                    'category_id' => $categoryId,
                    'location' => $location,
                    'circle_size' => $circleSize,
                ]);
            }
        }
    }

    protected function seedPosts(): void
    {
        $authors = User::where('email', 'like', '%@climatereport.org')->pluck('id')->all();
        $total = count(PostFactory::regions());

        foreach (PostFactory::regions() as $index => $region) {
            $slug = Str::slug($region['region']).'-climate-report';

            if (Post::where('slug', $slug)->exists()) {
                continue;
            }

            Post::factory()->forRegion($region)->create([
                'slug' => $slug,
                'author_id' => $authors[$index % count($authors)],
                'status' => 'PUBLISHED',
                'created_at' => now()->subDays($total - $index),
            ]);
        }
    }

    protected function registerMapFieldsInVoyagerBread(): void
    {
        $dataType = DataType::where('slug', 'posts')->first();

        if (! $dataType) {
            return;
        }

        $rows = [
            'location' => ['number', 'Map Location (lng,lat)', 16],
            'circle_size' => ['number', 'Map Circle Size (meters)', 17],
        ];

        foreach ($rows as $field => [$type, $displayName, $order]) {
            $row = DataRow::firstOrNew([
                'data_type_id' => $dataType->id,
                'field' => $field,
            ]);

            if ($row->exists) {
                continue;
            }

            $row->fill([
                'type' => $type,
                'display_name' => $displayName,
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => $order,
            ])->save();
        }
    }
}
