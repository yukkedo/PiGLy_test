<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'test name',
            'email' => 'example@example.com',
            'password' => Hash::make('test_user_password'),
        ];
        DB::table('users')->insert($user);
    }
}
