<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->name,
                'brand'=>$faker->name,
                'dosage'=>$faker->name,
                'form'=>$faker->name,
                'price'=>$faker->randomDigit(),
                'stock'=> $faker->randomNumber(9)
            ]);
        }
    }
}
