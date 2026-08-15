<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    protected ?array $region = null;

    /**
     * Laravel rebuilds factory instances through the constructor when states
     * are applied, which drops custom properties. Override so the pinned
     * region survives any factory transformation (state, count, create, ...).
     */
    protected function newInstance(array $arguments = [])
    {
        $instance = parent::newInstance($arguments);
        $instance->region = $this->region;

        return $instance;
    }

    /**
     * Curated dataset of global climate hotspots.
     *
     * Each entry drives a realistic post: a regional name, its thematic
     * category, an accurate map coordinate pair, a mean temperature anomaly
     * (degrees Celsius vs. the 1990-2020 baseline) and the radius (in metres)
     * used to draw the hotspot circle on the interactive map.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function regions(): array
    {
        return [
            ['region' => 'West Antarctica', 'category' => 'Polar Regions', 'lat' => -74.5, 'lng' => -112.5, 'anomaly' => 3.5, 'circle_size' => 600000],
            ['region' => 'Antarctic Peninsula', 'category' => 'Polar Regions', 'lat' => -65.0, 'lng' => -63.0, 'anomaly' => 2.8, 'circle_size' => 550000],
            ['region' => 'Beaufort Sea', 'category' => 'Polar Regions', 'lat' => 72.0, 'lng' => -140.0, 'anomaly' => 4.0, 'circle_size' => 700000],
            ['region' => 'Svalbard Archipelago', 'category' => 'Polar Regions', 'lat' => 78.0, 'lng' => 16.0, 'anomaly' => 3.6, 'circle_size' => 400000],
            ['region' => 'Siberian Permafrost', 'category' => 'Polar Regions', 'lat' => 65.0, 'lng' => 120.0, 'anomaly' => 3.4, 'circle_size' => 600000],
            ['region' => 'Canadian Arctic Tundra', 'category' => 'Polar Regions', 'lat' => 62.0, 'lng' => -110.0, 'anomaly' => 3.1, 'circle_size' => 500000],
            ['region' => 'Greenland Ice Sheet', 'category' => 'Glaciers & Ice Sheets', 'lat' => 69.5, 'lng' => -41.0, 'anomaly' => 2.9, 'circle_size' => 650000],
            ['region' => 'European Alps', 'category' => 'Glaciers & Ice Sheets', 'lat' => 46.5, 'lng' => 10.0, 'anomaly' => 2.3, 'circle_size' => 450000],
            ['region' => 'Himalayan Glaciers', 'category' => 'Glaciers & Ice Sheets', 'lat' => 28.0, 'lng' => 86.0, 'anomaly' => 1.9, 'circle_size' => 450000],
            ['region' => 'Andean Glaciers', 'category' => 'Glaciers & Ice Sheets', 'lat' => -13.0, 'lng' => -71.0, 'anomaly' => 1.6, 'circle_size' => 400000],
            ['region' => 'Mount Kilimanjaro', 'category' => 'Glaciers & Ice Sheets', 'lat' => -3.1, 'lng' => 37.4, 'anomaly' => 2.0, 'circle_size' => 300000],
            ['region' => 'Patagonian Ice Fields', 'category' => 'Glaciers & Ice Sheets', 'lat' => -49.0, 'lng' => -73.0, 'anomaly' => 1.8, 'circle_size' => 400000],
            ['region' => 'Amazon Rainforest', 'category' => 'Rainforests', 'lat' => -3.5, 'lng' => -60.0, 'anomaly' => 2.1, 'circle_size' => 500000],
            ['region' => 'Congo Basin Rainforest', 'category' => 'Rainforests', 'lat' => 0.5, 'lng' => 22.0, 'anomaly' => 1.4, 'circle_size' => 400000],
            ['region' => 'Great Barrier Reef', 'category' => 'Coral Reefs & Oceans', 'lat' => -18.5, 'lng' => 148.0, 'anomaly' => 1.7, 'circle_size' => 500000],
            ['region' => 'Coral Triangle', 'category' => 'Coral Reefs & Oceans', 'lat' => 2.0, 'lng' => 121.0, 'anomaly' => 1.6, 'circle_size' => 400000],
            ['region' => 'Southern Ocean', 'category' => 'Coral Reefs & Oceans', 'lat' => -60.0, 'lng' => 100.0, 'anomaly' => 2.5, 'circle_size' => 500000],
            ['region' => 'Pacific Island Nations', 'category' => 'Coastal & Sea Level', 'lat' => -8.5, 'lng' => 179.0, 'anomaly' => 1.4, 'circle_size' => 350000],
            ['region' => 'Mekong Delta', 'category' => 'Coastal & Sea Level', 'lat' => 10.0, 'lng' => 105.5, 'anomaly' => 1.6, 'circle_size' => 400000],
            ['region' => 'Louisiana Gulf Coast', 'category' => 'Coastal & Sea Level', 'lat' => 29.5, 'lng' => -90.5, 'anomaly' => 1.9, 'circle_size' => 400000],
            ['region' => 'Sahara Desert', 'category' => 'Deserts', 'lat' => 23.0, 'lng' => 12.0, 'anomaly' => 2.6, 'circle_size' => 550000],
            ['region' => 'Sahel Region', 'category' => 'Deserts', 'lat' => 13.0, 'lng' => 12.0, 'anomaly' => 2.0, 'circle_size' => 450000],
            ['region' => 'California Wildfires', 'category' => 'Wildfires', 'lat' => 37.0, 'lng' => -119.5, 'anomaly' => 2.0, 'circle_size' => 400000],
            ['region' => 'Australian Bushfires', 'category' => 'Wildfires', 'lat' => -25.0, 'lng' => 134.0, 'anomaly' => 2.2, 'circle_size' => 500000],
            ['region' => 'Mediterranean Basin', 'category' => 'Heatwaves & Droughts', 'lat' => 37.0, 'lng' => 20.0, 'anomaly' => 2.0, 'circle_size' => 400000],
            ['region' => 'Persian Gulf', 'category' => 'Heatwaves & Droughts', 'lat' => 25.0, 'lng' => 47.0, 'anomaly' => 2.4, 'circle_size' => 450000],
            ['region' => 'Indian Monsoon Belt', 'category' => 'Heatwaves & Droughts', 'lat' => 21.0, 'lng' => 79.0, 'anomaly' => 1.5, 'circle_size' => 400000],
            ['region' => 'Northern Europe', 'category' => 'Heatwaves & Droughts', 'lat' => 58.0, 'lng' => 19.0, 'anomaly' => 1.9, 'circle_size' => 350000],
            ['region' => 'Japan', 'category' => 'Extreme Weather & Storms', 'lat' => 36.5, 'lng' => 138.0, 'anomaly' => 1.7, 'circle_size' => 350000],
            ['region' => 'Gulf of Mexico', 'category' => 'Extreme Weather & Storms', 'lat' => 25.5, 'lng' => -90.0, 'anomaly' => 1.8, 'circle_size' => 450000],
        ];
    }

    /**
     * Pin the factory to a specific region from the curated dataset.
     */
    public function forRegion(array $region): static
    {
        $this->region = $region;

        return $this->state(fn () => [
            'location' => $this->locationString($region),
            'circle_size' => $region['circle_size'],
        ]);
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $region = $this->region ?? $this->faker->randomElement(static::regions());
        $category = $this->resolveCategory($region['category']);
        $title = $this->buildTitle($region);
        $excerpt = $this->buildExcerpt($region);

        return [
            'author_id' => User::factory(),
            'category_id' => $category->id,
            'title' => $title,
            'seo_title' => $title,
            'excerpt' => $excerpt,
            'body' => $this->buildBody($region),
            'image' => 'https://picsum.photos/seed/'.Str::slug($region['region']).'/1200/600',
            'slug' => Str::slug($title).'-'.Str::lower(Str::random(5)),
            'meta_description' => $excerpt,
            'meta_keywords' => $this->buildKeywords($region),
            'status' => $this->faker->randomElement(['PUBLISHED', 'PUBLISHED', 'PUBLISHED', 'DRAFT']),
            'featured' => $this->faker->boolean(20),
            'location' => $this->locationString($region),
            'circle_size' => $region['circle_size'],
        ];
    }

    protected function resolveCategory(string $category): Category
    {
        return Category::firstOrCreate(
            ['slug' => Str::slug($category)],
            ['name' => $category, 'order' => 1]
        );
    }

    protected function buildTitle(array $region): string
    {
        $titles = [
            "Temperature Anomaly of {$region['anomaly']}°C Recorded Across {$region['region']}",
            "Climate Report: {$region['region']} Under Increasing Environmental Stress",
            "{$region['region']} Shows Accelerating Signs of Climate Change",
            "New Satellite Data Details the Climate Crisis in {$region['region']}",
            "{$region['region']} Crosses Critical Climate Threshold",
            "How Climate Change Is Reshaping {$region['region']}",
        ];

        return $this->faker->randomElement($titles);
    }

    protected function buildExcerpt(array $region): string
    {
        return "Monitoring across {$region['region']} shows mean temperatures {$region['anomaly']}°C above the 1990–2020 baseline, with {$this->categoryImpact($region['category'])} now clearly visible in the data.";
    }

    protected function buildBody(array $region): string
    {
        $name = $region['region'];
        $category = $region['category'];
        $coords = $this->coordinateLabel($region);

        return implode("\n\n", [
            '<h2>Overview</h2>',
            "<p>The <strong>{$name}</strong> region, centred around {$coords}, continues to show a marked departure from historical climate norms. Monitoring datasets compiled for this report indicate a mean temperature anomaly of <strong>+{$region['anomaly']}&deg;C</strong> relative to the 1990&ndash;2020 reference period, placing the area among the most rapidly changing environments on Earth.</p>",
            '<h2>Observational Evidence</h2>',
            "<p>Satellite records &mdash; including imagery from NASA's MODIS, ICESat-2 and GRACE-FO missions &mdash; confirm the trend over successive observation windows. {$this->faker->paragraph()}</p>",
            '<h2>Impacts on Local Ecosystems</h2>',
            "<p>The consequences are already visible: {$this->categoryImpact($category)}. {$this->faker->paragraph()}</p>",
            '<h2>Climate Projections</h2>',
            "<p>If current emissions trajectories hold, model ensembles project the anomaly across {$name} to widen further over the coming decade. {$this->faker->paragraph()}</p>",
            '<h2>Significance</h2>',
            "<p>Because {$name} plays a critical role in regional and global climate regulation, continued monitoring remains essential. {$this->faker->paragraph()}</p>",
        ]);
    }

    protected function buildKeywords(array $region): string
    {
        return implode(', ', [
            $region['region'],
            $region['category'],
            'climate change',
            'global warming',
            'temperature anomaly',
            'NASA earth science',
            'environmental monitoring',
            'climate report',
        ]);
    }

    protected function categoryImpact(string $category): string
    {
        return match ($category) {
            'Polar Regions' => 'accelerating ice melt, thinning multi-year sea ice and destabilising ice shelves',
            'Glaciers & Ice Sheets' => 'accelerated glacier retreat, surface mass loss and shifts in seasonal runoff',
            'Rainforests' => 'rising drought stress, increased tree mortality and a higher fire risk',
            'Coral Reefs & Oceans' => 'more frequent marine heatwaves, mass coral bleaching events and ocean acidification',
            'Coastal & Sea Level' => 'accelerated sea level rise, more frequent coastal flooding and erosion of low-lying land',
            'Deserts' => 'worsening drought frequency, expanding arid zones and intensifying dust storms',
            'Wildfires' => 'a lengthening fire season, more intense burn events and greater area lost annually',
            'Heatwaves & Droughts' => 'more intense heatwaves, prolonged drought and growing water stress',
            default => 'shifting rainfall patterns and an increasing frequency of climate extremes',
        };
    }

    protected function coordinateLabel(array $region): string
    {
        $lat = abs($region['lat']).'°'.($region['lat'] < 0 ? 'S' : 'N');
        $lng = abs($region['lng']).'°'.($region['lng'] < 0 ? 'W' : 'E');

        return "{$lat}, {$lng}";
    }

    protected function locationString(array $region): string
    {
        return sprintf('%s,%s', $region['lng'], $region['lat']);
    }
}
