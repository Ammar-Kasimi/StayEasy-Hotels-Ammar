<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Role::factory()
        //     ->count(3)
        //     ->sequence(
        //         ['name' => 'Admin'],
        //         ['name' => 'Manager'],
        //         ['name' => 'Client'],
        //     )
        //     ->create();

        User::factory()->create([
            'name' => 'Salah Houmdi',
            'email' => 'salah@email.com',
            'password' => '1234',
            'role_id' => 1
        ]);
    }
}
