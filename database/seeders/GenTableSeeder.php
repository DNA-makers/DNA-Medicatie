<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('gen')->insert([
                'user_id' => $faker->randomElement($userIds),
                'gen_code' => $faker->unique()->regexify('[A-Z0-9]{8}'),
                'diplotype' => $faker->randomElement(['AABBCC', 'AABBCD', 'AABBDD']),
                'phenotype' => $faker->sentence(4),
                'divergent' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
