<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rental_transactions')->insert([
            [
                'user_id' => "1",
                'zoom_id' => "1",
                'date' => now(),
                'time' => now(),
                'duration' => "3",
            ],
            [
                'user_id' => "1",
                'zoom_id' => "1",
                'date' => now(),
                'time' => now()->addHour(),
                'duration' => "3",
            ],
            [
                'user_id' => "1",
                'zoom_id' => "3",
                'date' => now()->addDay(),
                'time' => now()->addHours(-2),
                'duration' => "4",
            ],
            [
                'user_id' => "1",
                'zoom_id' => "2",
                'date' => now()->addDay()->addDay(),
                'time' => now()->addHours(4),
                'duration' => "24",
            ],
            [
                'user_id' => "2",
                'zoom_id' => "2",
                'date' => now(),
                'time' => now()->addHours(4)->addMinutes(20),
                'duration' => "24",
            ],
        ]);
    }
}
