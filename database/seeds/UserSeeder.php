<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => "member",
                'email' => "member@gmail.com",
                'password' => bcrypt("member"),
                'role' => "user"
            ],
            [
                'username' => "albert",
                'email' => "albert@gmail.com",
                'password' => bcrypt("albert"),
                'role' => "admin"
            ],
        ]);
    }
}
