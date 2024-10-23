<?php

namespace Database\Seeders;

use App\Models\SaranaPerikanan;
use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaranaPerikananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = Village::all();
        foreach ($datas as $data) {
            SaranaPerikanan::create([
                'village_id' => $data->id,
                'tambatan' => fake()->numerify("##"),
                'pasar_ikan' => fake()->numerify("##"),
                'pajeko' => fake()->numerify("##"),
                'kapal_ikan' => fake()->numerify("##"),
                'perahu_bodi' => fake()->numerify("##"),
                'mesin_tempel' => fake()->numerify("##"),
                'katintin' => fake()->numerify("##"),
            ]);
        }
    }
}
