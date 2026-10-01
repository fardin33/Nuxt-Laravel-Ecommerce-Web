<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([
            ['name' => 'Admin', 'slug' => 'admin'],
            ['name' => 'Seller', 'slug' => 'seller'],
            ['name' => 'Customer', 'slug' => 'customer'],
        ] as $role) {
            Role::updateOrCreate(['slug' => $role['slug']], $role);
        }
    }
}
