<?php

namespace Database\Seeders\Admin;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'Samiul',
            'usertype'=> 'Admin',
            'email' => 'samiulsiam59@gmail.com',
            'password' => Hash::make('password'),
            'role'=> 'admin',
            'religion'=> 'Islam',
            'status' => 1
        ]);
    }
}
