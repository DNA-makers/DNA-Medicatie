<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hospitals = [
            [
                'name' => 'LUMC',
                'address' => 'Albinusdreef 2, 2333 ZA Leiden',
                'phone_number' => '071 526 9111',
                'website_link' => 'https://www.lumc.nl/'
            ],
            [
                'name' => 'AMC',
                'address' => 'Meibergdreef 9, 1105 AZ Amsterdam',
                'phone_number' => '020 566 9111',
                'website_link' => 'https://www.amc.nl/web/home.htm'
            ],
            [
                'name' => 'EMC',
                'address' => 'Dr. Molewaterplein 40, 3015 GD Rotterdam',
                'phone_number' => '010 704 0704',
                'website_link' => 'https://www.erasmusmc.nl/nl-nl/'
            ]
        ];

        DB::table('hospital')->insert($hospitals);
    }
}
