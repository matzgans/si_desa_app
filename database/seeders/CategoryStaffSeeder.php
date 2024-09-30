<?php

namespace Database\Seeders;

use App\Models\CategoryStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Kepala Desa", "Bendahara", "Sekretaris"];
        foreach ($categories as $category) {
            CategoryStaff::create([
                'category' => $category,
            ]);
        }
    }
}
