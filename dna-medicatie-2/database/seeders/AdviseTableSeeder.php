<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gen;
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

        foreach ($gens as $gen) {
            DB::table('advise')->insert([
                'gen_id' => $gen->id,
                'title' => $faker->sentence,
                'gen_code' => $gen->gen_code,
                'advise' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
