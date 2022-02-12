<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccountSeeder::class,
            EbookSeeder::class,
            GenderSeeder::class,
            RoleSeeder::class,
        ]);
        Order::factory(5)->create();
    }
}
