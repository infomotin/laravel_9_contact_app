<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
// use Illuminate\Support\Facades\DB
use DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first get table and tranket is using DB 
        DB::table('contacts')->truncate();
        // then insert data
        $contacts = [];
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            $contacts[] = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'zip' => $faker->postcode,
                'company_id' => $faker->numberBetween(1,100),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('contacts')->insert($contacts);
        //
    }
}
