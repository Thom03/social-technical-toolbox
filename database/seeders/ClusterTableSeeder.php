<?php

namespace Database\Seeders;

use App\Models\Cluster;
use Illuminate\Database\Seeder;

class ClusterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cluster::create([
            'name'=> 'Technical',
            'slug'=> 'technical',

        ]);

        Cluster::create([
            'name'=> 'Social',
            'slug'=> 'social',

        ]);

        Cluster::create([
            'name'=> 'Technology',
            'slug'=> 'technology',

        ]);
    }
}
