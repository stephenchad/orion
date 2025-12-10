<?php

namespace Database\Seeders;



use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        

        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active'
            ],
           //Vendor
            [
                'name' => 'Vendor',

                'username' => 'vendor',
                'email' => 'vendor@example.com',
                'password' => Hash::make('password'),
                'role' => 'vendor',
                'status' => 'active'
            ],
            //User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active'
            ],
        

        ]);


    }
}