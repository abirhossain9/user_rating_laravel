<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('services')->insert([
        //     'service_name' => 'Web Development',
        //     'description' => 'Web development is the work involved in developing a Web site for the Internet or an intranet.
        //      Web development can range from developing a simple single static page of plain text to complex web applications,
        //      electronic businesses, and social network services. ',
        //     'rating' => 5,
        // ],

        // foreach (range(1,5) as $value) {
        //     # code...
        //     DB::table('services')->insert([
        //     'service_name' => Str::random(10),
        //     'description' => Str::random(200),
        //     'rating' => rand(0,5),
        // ], );
        // }

        $faker = Faker::create();
        foreach (range(1,5) as $value) {
            # code...
            DB::table('services')->insert([
            'service_name' => $faker->jobTitle(),
            'description' => $faker->text($maxNbChars = 50),
        ], );
        }
    }
}
