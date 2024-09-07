<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin', // Quyền admin
        ]);

        User::create([
            'name' => 'Employee User',
            'email' => 'employee@example.com',
            'password' => Hash::make('employee123'),
            'role' => 'employee', // Quyền employee
        ]);
    }
}
