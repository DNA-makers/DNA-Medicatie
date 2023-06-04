<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'hospital' => $faker->randomElement(['LUMC', 'AMC', 'EMC']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
