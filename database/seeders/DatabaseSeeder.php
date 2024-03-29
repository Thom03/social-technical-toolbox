<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ClusterTableSeeder::class);
        $this->call(ImpactAreaTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(RegionTableSeeder::class);
    }
}
