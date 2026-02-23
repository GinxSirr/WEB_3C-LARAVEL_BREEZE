<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $adminRole = Roles::where('name', 'admin')->first();
        $userRole = Roles::where('name', 'user')->first();

        $adminUser = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);
        $adminUser->roles()->attach($adminRole->id);

        $normalUser = User::factory()->create([
            'name' => 'Normal User',
            'email' => 'user@user.com',
            'password' => 'password',
        ]);
        $normalUser->roles()->attach($userRole->id);
    }
}
