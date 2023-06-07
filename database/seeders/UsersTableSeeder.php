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
        $hospitalIds = DB::table('hospital')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $hospitalId = $faker->randomElement($hospitalIds);
            $hospitalName = DB::table('hospital')->where('id', $hospitalId)->value('name');

            DB::table('users')->insert([
                'hospital_id' => $hospitalId,
                'hospital_name' => $hospitalName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
