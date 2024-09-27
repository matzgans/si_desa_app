<?php

namespace Database\Seeders;

use App\Models\Resident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $genders = ['male', 'female'];
        $education_levels = ['SD', 'SMP', 'SMA', 'STRATA 1', 'STRATA 2'];
        $occupations = ['Farmer', 'Teacher', 'Fisherman', 'Engineer', 'Doctor', 'Entrepreneur'];

        for ($i = 0; $i < 6; $i++) {
            // Generate unique 16-digit NIK
            $nik = fake()->unique()->numerify('################');

            // Generate random file name for the image
            $imageName = fake()->uuid() . '.jpg';

            // Generate random image ID from Picsum (e.g., from 1 to 100)
            $imageId = fake()->numberBetween(1, 100);
            $picsumUrl = "https://picsum.photos/id/{$imageId}/200/300";

            // Define image storage path
            $imagePath = public_path('residents/images/');

            // Check if the directory exists, if not create it
            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0777, true);
            }

            // Get image from Picsum and save it to the specified directory
            $imageData = file_get_contents($picsumUrl);
            file_put_contents($imagePath . $imageName, $imageData);

            Resident::create([
                'nik' => $nik,
                'name' => fake()->name(),
                'gender' => fake()->randomElement($genders),
                'age' => fake()->numberBetween(18, 60),  // Generate random age between 18 and 60
                'occupation' => fake()->randomElement($occupations),
                'education_level' => fake()->randomElement($education_levels),
                'photo_profile' => $imageName,  // Save the generated image name
            ]);
        }
    }
}
