<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\Expense;
use App\Models\Permission;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Refund;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\Service;
use App\Models\Source;
use App\Models\Supplier;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('123456')
            ]);
            $admin->save();

        for ($i = 1; $i <= 10; $i++) {
            $user = User::factory()->create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('123456')
            ]);
        }

        $this->call(SourceSeeder::class);

        $this->call(RolerSeeder::class);

        $roles =Role::all();
        $admin->roles()->attach($roles);

        $this->call(ServiceSeeder::class);

        $services = Service::all();
        $user->services()->attach($services);

        $routeCollection = Route::getRoutes();


        foreach ($routeCollection as $route) {
            $name = $route->getName();

            if ($name && !Permission::where('name', $name)->exists()) {
                Permission::create(['name' => $name]);
            }
        }

        $permissions = Permission::all();

        $role = Role::where(['name' => 'god'])->first();
        $role->permissions()->attach($permissions);

        $sources = Source::all();

        $users = User::all();

        for ($i = 1; $i <= 10; $i++) {
            Client::create([
                'name' => fake()->name,
                'phone' => fake()->phoneNumber,
                'email' => fake()->email,
                'address' => fake()->address,
                'type' => fake()->randomElement(['client', 'lead']),
                'id_source' => $sources->random()->id,
                'id_service' => $services->random()->id,
                'source_desc' => fake()->text(20),
                'id_sales_staff' => $users->random()->id,
            ]);
        }

            for ($i = 1; $i <= 20; $i++) {
                 Expense::create([
                    'amount' => rand(0, 1000),
                    'id_invoice' => rand(1, 10),
                    'id_service' => $services->random()->id,
                    'is_paid' => fake()->boolean(),
                    'desc' => fake()->text(10),
                    'payment' => fake()->randomElement(['CA', 'PY', 'CR']),
                    'payment_date' => fake()->date

                ]);
        }

        $clients = Client::all();

            for ($i = 1; $i <= 20; $i++) {
                 Revenue::create([
                    'amount' => rand(0, 1000),
                    'installment' => rand(0, 12),
                    'id_invoice' => rand(1, 10),
                    'id_client' => $clients->random()->id,
                    'id_service' => $services->random()->id,
                    'payment_status' => fake()->boolean(),
                    'desc' => fake()->text(10),
                    'payment' =>  fake()->randomElement(['CA', 'PY', 'CR']),
                    'payment_date' => fake()->dateTimeBetween(Carbon::now()->subMonth(6), Carbon::now())

                ]);
            }

        Refund::factory(10)->create();

        Product::factory(10)->create();

        Supplier::factory(10)->create();

        Purchase::factory(10)->create();
    }
}
