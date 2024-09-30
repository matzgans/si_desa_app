<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = Village::all();
        $type = ['Belum / Tidak Sekolah', 'TAMAT SD/SEDERAJAT', 'TAMAT SMP/SEDERAJAT', 'TAMAT SMA/SEDERAJAT', 'TAMAT PT'];
        foreach ($datas as $data) {
            EducationLevel::create([
                'village_id' => $data->id,
                'education_level' => fake()->randomElement($type),
                'male_count' => fake()->randomNumber(),
                'female_count' => fake()->randomNumber(),
                'total_count' => fake()->randomNumber(),
            ]);
        }
    }
}
