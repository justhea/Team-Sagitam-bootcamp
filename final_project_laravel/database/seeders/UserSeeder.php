<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Pedro',
            'email' => 'juan.pedro@gmail.com',
            'password' => Hash::make('password123'),
            'user_type' => 'admin',
            'bdate' => '1990-05-31',
            'contact_no' => '09173210762',
            'profile_image' => 'http://ec2-13-212-173-174.ap-southeast-1.compute.amazonaws.com:8000/storage/images/default.jpg'
        ]);
    }
}
