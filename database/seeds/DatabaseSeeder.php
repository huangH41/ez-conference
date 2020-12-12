<?php

use App\RentalTransaction;
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
        $this->call(ZoomSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RentalTransactionSeeder::class);
    }
}
