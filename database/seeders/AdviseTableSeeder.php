<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gen;
use App\Models\Advise;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdviseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $gens = Gen::all();

        $csvData = fopen(base_path('database/csv/advice-final.csv'), 'r');
        $transRow = true;



            while (($data = fgetcsv($csvData, 555, ',')) !== false) {
                
                if (count($data) >= 3) {
                    Advise::create([
                        // 'user_id' => $faker->randomElement($userIds),
                        // 'gen_id' => $gen->id,
                        'title' => $data['0'],
                        'advise' => $data['1'],
                        'gen_code' => $data['2'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                } else {
                    continue;
                }
                
                $transRow = false;
            }    
        
        // foreach ($gens as $gen) {
        //     $numberOfAdvises = 5; 
        //     for ($i = 0; $i < $numberOfAdvises; $i++) {
        //         DB::table('advise')->insert([
        //             'gen_id' => $gen->id,
        //             'title' => $faker->sentence,
        //             'gen_code' => $gen->gen_code,
        //             'advise' => $faker->paragraph,
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ]);
        //     }
        // }
        
    }
}
