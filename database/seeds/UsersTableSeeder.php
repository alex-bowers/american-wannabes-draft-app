<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testUsers = [
            [
                'name' => "test1",
                'fantasy_team_name' => "Burslem Spitfires",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test1'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test2",
                'fantasy_team_name' => "Deez Nuts",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test2'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test3",
                'fantasy_team_name' => "Wobblers XI",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test3'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test4",
                'fantasy_team_name' => "Always Sony in New England",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test4'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test5",
                'fantasy_team_name' => "Foxville  49ers",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test5'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test6",
                'fantasy_team_name' => "Laces Out",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test6'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test7",
                'fantasy_team_name' => "Throwing On The One",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test7'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test8",
                'fantasy_team_name' => "Factory of Sadness",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test8'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test9",
                'fantasy_team_name' => "Storts' Superstars",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test9'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test10",
                'fantasy_team_name' => "Made in Kelce",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test10'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test11",
                'fantasy_team_name' => "Founding Failures",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test11'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test12",
                'fantasy_team_name' => "Show Me Bryce Love",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test12'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test13",
                'fantasy_team_name' => "Bay Harbor Butchers",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test13'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test14",
                'fantasy_team_name' => "Essex Jamspanglers",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test14'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($testUsers as $testUser) {
            User::insert($testUser);
        }
    }
}
