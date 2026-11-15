<?php

namespace Database\Seeders;

use App\Enums\UserRole;
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

        $email = env('SEED_ADMIN_EMAIL');
        $password = env('SEED_ADMIN_PASSWORD');

        if ($email && $password) {
            $admin = User::firstOrNew(['email' => $email]);
            $admin->forceFill([
                'name' => 'Administrator',
                'password' => $password,
                'email_verified_at' => now(),
                'role' => UserRole::Admin,
            ])->save();
        }

        if (app()->environment('local')) {
            User::factory()->staff()->count(2)->create();
            User::factory()->count(10)->create();
        }
    }
}
