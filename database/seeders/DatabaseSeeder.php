<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductComment;
=======
>>>>>>> 866fac8ccb9a75a6612372ff1780eb2357e75559
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class
        ]);
=======
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 866fac8ccb9a75a6612372ff1780eb2357e75559
    }
}
