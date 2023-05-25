<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'god',
            'admin',
            'staff_sales',
            'developer',
        ];

        foreach ($roles as $role)
        {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
