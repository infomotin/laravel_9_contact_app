<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//import faker library
use Faker\Factory as Faker;
// use Illuminate\Support\Facades\DB;

use DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compamies')->truncate();
        $companies = [];
        $faker = Faker::create();

        // for($i = 0; $i < 100; $i++) {
        //     $companies[] = [
        //         'name' => 'Company ' . $i,
        //         'address' => 'Address ' . $i,
        //         'phone' => 'Phone ' . $i,
        //         'email' => 'Email ' . $i,
        //         'website' => 'Website ' . $i,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ];
        // }
        // foreach($i in range(1,100)){
        //     $companies[] = [
        //         'name' => 'Company ' . $i,
        //         'address' => 'Address ' . $i,
        //         'phone' => 'Phone ' . $i,
        //         'email' => 'Email ' . $i,
        //         'website' => 'Website ' . $i,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ];
        // }


        foreach (range(1,100) as $index) {
            $companies[] = [
                'name' => $faker->company,
                'address' => $faker->address,
                'email' => $faker->email,
                'website' => $faker->url,
                'created_at' => now(),
                'updated_at' => now()
            ];
        } 
        DB::table('compamies')->insert($companies);
    }
}
