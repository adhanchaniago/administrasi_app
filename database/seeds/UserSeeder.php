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
            'name' => 'administrator',
            'email' => 'admin@gmail.com',
            'level_id' => 1,
            'division_id' => 1,
            'image' => 'uploads/users/default.png',
            'phone' => "061 09839434",
            'address' => 'PT. Maha Akbar Sejahtera',
            'email_verified_at' => now(),
            'password' => bcrypt('banggi361'),
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}