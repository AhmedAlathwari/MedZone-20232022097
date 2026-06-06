<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@medzone.com'],
            [
                'name' => 'MedZone Admin',
                'password' => Hash::make('password'),
            ]
        );
    }
}
