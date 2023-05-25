<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
          'websites',
          'marketing',
          'it',
          'ecommerce',
        ];

        foreach ($services as $service) {
            Service::create([
                'name' => $service,
                'slug' => Str::slug($service)
            ]);
        }
    }
}
