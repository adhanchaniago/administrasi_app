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
            'name' => 'Super Su',
            'email' => 'superadmin@gmail.com',
            'level_id' => 1,
            'division_id' => 1,
            'image' => 'uploads/users/default.png',
            'signature' => 'uploads/users/signature/default.png',
            'phone' => "061 09839434",
            'address' => 'PT. Maha Akbar Sejahtera',
            'email_verified_at' => now(),
            'password' => bcrypt('banggi361'),
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'level_id' => 1,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'level_id' => 4,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fahrul Rizal',
                'email' => 'rizal@gmail.com',
                'level_id' => 3,
                'division_id' => 3,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hazri',
                'email' => 'hazri@gmail.com',
                'level_id' => 3,
                'division_id' => 2,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Krisyanto',
                'email' => 'kris@gmail.com',
                'level_id' => 4,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'layla sarantika',
            //     'email' => 'lailasarantika@gmail.com',
            //     'level_id' => 1,
            //     'division_id' => 1,
            //     'image' => 'uploads/users/default.png',
            //     'signature' => 'uploads/users/signature/default.png',
            //     'phone' => "061 09839434",
            //     'address' => 'Maha',
            //     'email_verified_at' => now(),
            //     'password' => bcrypt('admin'),
            //     'remember_token' => '',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
