<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Region::create([
            'name'=> 'South America',
            'slug'=> 'south_america',

        ]);

        Region::create([
            'name'=> 'Eastern Africa',
            'slug'=> 'eastern_africa',

        ]);

        Region::create([
            'name'=> 'Southern Asia',
            'slug'=> 'southern_asia',

        ]);

        Region::create([
            'name'=> 'Central America',
            'slug'=> 'central_america',

        ]);

        Region::create([
            'name'=> 'Middle Africa',
            'slug'=> 'Middle Africa',

        ]);

        Region::create([
            'name'=> 'Northern Europe',
            'slug'=> 'northern_europe',

        ]);

        Region::create([
            'name'=> 'Australia and New Zealand',
            'slug'=> 'australia_and_new_zealand',

        ]);

    }
}
