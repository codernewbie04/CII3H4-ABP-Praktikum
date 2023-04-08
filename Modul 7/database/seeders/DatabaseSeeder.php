<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'stock' => $faker->numberBetween(1, 100),
                'price' => $faker->numberBetween(10000, 1000000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        DB::table('users')->insert([
            'name' => "Akmal Muhamad Firdaus",
            'email' => "akmalmf007@gmail.com",
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
