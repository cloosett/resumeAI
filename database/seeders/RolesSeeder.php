<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Створення ролей тільки якщо вони ще не існують
        $adminRole = Role::firstOrCreate(['name' => 'layout']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Призначення ролі адміну (припускаючи, що це перший користувач)
        $admin = User::first();
        if ($admin) {
            $admin->assignRole('layout');
        }
    }
}
