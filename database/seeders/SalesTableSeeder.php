<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $medicine_id = DB::table('medicines')->select('medicine_id')->get();
        for ($i = 0; $i < 20; $i++) {
            DB::table('sales')->insert([
                'medicine_id' =>$faker->randomNumber(1, count($medicine_id)),
                'quantity'=>$faker->randomNumber(9),
                'sale_date'=>$faker->date,
                'customer_phone'=>$faker->phoneNumber,
            ]);
        }
    }
}
