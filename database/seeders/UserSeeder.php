<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super admin',
            'email' => 'superadmin@email.com',
            'password' => Hash::make('secret')
        ]);
        $user->roles()->attach(1);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('secret')
        ]);
        $user->roles()->attach(2);
    }
}
