<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value) {
            # code...
            DB::table('users')->insert([
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => $faker->password(),
        ], );
        }
    }
}
