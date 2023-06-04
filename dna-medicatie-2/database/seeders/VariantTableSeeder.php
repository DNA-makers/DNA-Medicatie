<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gen;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VariantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $gens = Gen::all();

        foreach ($gens as $gen) {
            DB::table('variant')->insert([
                'gen_id' => $gen->id,
                'gen_code' => $gen->gen_code,
                'allel_a' => $faker->randomElement(['A', 'T', 'C', 'G']),
                'allel_b' => $faker->randomElement(['A', 'T', 'C', 'G']),
                'unphased' => $faker->boolean,
                'covered' => $faker->text,
                'not_covered' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
