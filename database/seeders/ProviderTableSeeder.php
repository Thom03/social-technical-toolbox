<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Provider::create([
            'identifier'=> 'ifpri',
            'name'=> 'International Food Policy Research Institute (IFPRI)',
            'url'=> 'https://www.ifpri.org/',
        ]);

        Provider::create([
            'identifier'=> 'icarda',
            'name'=> 'International Center for Agricultural Research in the Dry Areas (ICARDA)',
            'url'=> 'https://www.icarda.org/',
        ]);

        Provider::create([
            'identifier'=> 'ciat',
            'name'=> 'International Center for Tropical Agriculture (CIAT)',
            'url'=> 'https://ciat.cgiar.org/',
        ]);

        Provider::create([
            'identifier'=> 'africarice',
            'name'=> 'Africa Rice Center',
            'url'=> 'https://www.africarice.org//',
        ]);

        Provider::create([
            'identifier'=> 'cip',
            'name'=> 'International Patato Center (CIP)',
            'url'=> 'https://cipotato.org/',
        ]);

        Provider::create([
            'identifier'=> 'worldfish',
            'name'=> 'WorldFish',
            'url'=> 'https://www.worldfishcenter.org/',
        ]);

        Provider::create([
            'identifier'=> 'cimmty',
            'name'=> 'International Maize and Wheat Improvement Center (CIMMTY)',
            'url'=> 'https://www.cimmyt.org/',
        ]);

        Provider::create([
            'identifier'=> 'iita',
            'name'=> 'International Institute of Tropical Agriculture (IITA)',
            'url'=> 'https://www.iita.org/',
        ]);

        Provider::create([
            'identifier'=> 'irri',
            'name'=> 'International Rice Research Institute (IRRI)',
            'url'=> 'https://www.irri.org/',
        ]);
    }
}
