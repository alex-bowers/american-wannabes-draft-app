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
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test1'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test2",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test2'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test3",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test3'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test4",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test4'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test5",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test5'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test6",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test6'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test7",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test7'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test8",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test8'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test9",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test9'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test10",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test10'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test11",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test11'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test12",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test12'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test13",
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('test13'),
                'active' => 1,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "test14",
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
