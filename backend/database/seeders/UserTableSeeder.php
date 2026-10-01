<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([
            ['name' => 'Admin', 'email' => 'admin@example.com', 'role' => 'admin'],
            ['name' => 'Seller', 'email' => 'seller@example.com', 'role' => 'seller'],
            ['name' => 'Customer', 'email' => 'customer@example.com', 'role' => 'customer'],
        ] as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'role_id' => Role::where('slug', $user['role'])->value('id'),
                    'password' => '12345',
                    'email_verified_at' => now(),
                ],
            );
        }
    }
}
