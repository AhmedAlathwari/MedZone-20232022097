<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
        ]);

        $adminUser = User::updateOrCreate(
            ['email' => 'admin@medzone.com'],
            [
                'name' => 'MedZone Admin',
                'password' => Hash::make('password'),
            ]
        );

        $adminUser->roleList()->syncWithoutDetaching([
            $adminRole->id
        ]);
    }
}
