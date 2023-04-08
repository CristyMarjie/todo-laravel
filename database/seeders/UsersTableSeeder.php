<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();
        // $users = [
        //     [
        //         'name' => 'Cristy Marjie Braga',
        //         'email' => 'cristy@gmail.com',
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        //     ],
        //     [
        //         'name' => 'David Smith',
        //         'email' => 'david@gmail.com',
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        //     ]
        // ];
        // foreach ($users as $user){
        //     User::create($user);
        // }

        //create a single static record
        User::create([
            'name' => 'Cristy Marjie Braga',
            'email' => 'cristymarjie@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
