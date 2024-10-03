<?php

namespace Database\Seeders;

use App\Models\TransportationMean;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            VillageSeeder::class,
            TransportationMeanSeeder::class,
            EducationLevelSeeder::class,
            CategoryStaffSeeder::class,
            StructureSeeder::class,
            ResidentSeeder::class,
            ArticleSeeder::class,
            ComunityEconomySeeder::class,
        ]);
    }
}
