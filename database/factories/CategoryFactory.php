<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->randomElement([
            'Polar Regions',
            'Glaciers & Ice Sheets',
            'Rainforests',
            'Coral Reefs & Oceans',
            'Coastal & Sea Level',
            'Deserts',
            'Wildfires',
            'Heatwaves & Droughts',
            'Extreme Weather & Storms',
        ]);

        return [
            'parent_id' => null,
            'order' => $this->faker->numberBetween(1, 10),
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
