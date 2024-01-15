<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'name' => 'Admin User',
                'username' => 'AdminMadmin',
                'email' => 'adminmadmin@tutanota.com',
                'password' => Hash::make('secretpass'),
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Regular Employee',
            'username' => 'RegEmp',
            'email' => 'regemp@tutanota.com',
            'password' => Hash::make('secretpass2'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
                'name' => 'Test User',
                'username' => 'TestUser',
                'email' => 'testuser@tutanota.com',
                'password' => Hash::make('secretpass1'),
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}
