<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

        // Admin
        [
            'name'=>'Admin 1',
            'email'=>'admin1@mail.com',
            'username'=>'0812345678',
            'phone_number'=>'021345678',
            'password'=>Hash::make('12345678'), // Default Password
            'role'=>'admin',
        ],
        [
            'name'=>'Admin 2',
            'email'=>'admin2@mail.com',
            'username'=>'0987654321',
            'phone_number'=>'02155667788',
            'password'=>Hash::make('12345678'), // Default Password
            'role'=>'admin',
        ],

        // Alumni
        [
            'name'=>'Alumni 1',
            'email'=>'alumni1@mail.com',
            'username'=>'462345678',
            'phone_number'=>'0812387564',
            'password'=>Hash::make('12345678'), // Default Password
            'role'=>'alumni',
        ],
        [
            'name'=>'Alumni 2',
            'email'=>'alumni2@mail.com',
            'username'=>'481234563',
            'phone_number'=>'08432897',
            'password'=>Hash::make('12345678'), // Default Password
            'role'=>'alumni',
        ],

        ]);
    }
}
