<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Fajrin Suhar',
            'username' => 'fajrin',
            'email' => 'fajringanteng@gmail.com',
            'password' => Hash::make('fajrin123'),
            'is_admin'=> true 
        ]);
        User::factory(3)->create();
    }
}
