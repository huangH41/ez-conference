<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zooms')->insert([
            [
                'participant' => "100",
                'price' => "5000",
            ],
            [
                'participant' => "300",
                'price' => "10000",
            ],
            [
                'participant' => "1000",
                'price' => "20000",
            ],
        ]);
    }
}
