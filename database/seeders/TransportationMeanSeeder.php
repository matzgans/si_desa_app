<?php

namespace Database\Seeders;

use App\Models\TransportationMean;
use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportationMeanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = Village::all();
        $type = ['Mobil', 'Motor', 'Bentor'];
        foreach ($datas as $data) {
            TransportationMean::create([
                'village_id' => $data->id,
                'vehicle_type' => fake()->randomElement($type),
                'total_count' => fake()->randomNumber(),
                'owner_count' => fake()->randomNumber(),
            ]);
        }
    }
}
