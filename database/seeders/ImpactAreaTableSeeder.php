<?php

namespace Database\Seeders;

use App\Models\ImpactArea;
use Illuminate\Database\Seeder;

class ImpactAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ImpactArea::create([
            'name'=> 'Nutrition, Health, and Food Security',
            'slug'=> 'nutrition_health_and_food_Security',
        ]);

        ImpactArea::create([
            'name'=> 'Poverty Reduction, Livelihood, and Jobs',
            'slug'=> 'poverty_reduction_livelihood_and_jobs',
        ]);

        ImpactArea::create([
            'name'=> 'Gender Equity, Youth, and Social Inclusion',
            'slug'=> 'gender_equity_youth_and_social_inclusion',
        ]);

        ImpactArea::create([
            'name'=> 'Climate Adaption and Mitigation',
            'slug'=> 'climate_adaption_and_mitigation',
        ]);

        ImpactArea::create([
            'name'=> 'Environmental Health and Biodiversity',
            'slug'=> 'environmental_health_and_biodiversity',
        ]);
    }
}
