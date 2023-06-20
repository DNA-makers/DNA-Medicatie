<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Gen;
use Faker\Factory as Faker;

class GenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gen::truncate(); 
        $faker = Faker::create();
        $csvData = fopen(base_path('database/csv/gen-overzicht.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Gen::create([
                    // 'user_id' => $faker->randomElement($userIds),
                    'gen_code' => $data['0'],
                    'diplotype' => $data['1'],
                    'phenotype' => $data['2'],
                    'divergent' => $faker->boolean,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            $transRow = false;
        }        
    }
}
