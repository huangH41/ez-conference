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
                'zoom_user_id' => "Gz_M7pLqTKO2kjd197fYZw"
            ],
            [
                'participant' => "300",
                'price' => "10000",
                'zoom_user_id' => "Gz_M7pLqTKO2kjd197fYZw"
            ],
            [
                'participant' => "1000",
                'price' => "20000",
                'zoom_user_id' => "Gz_M7pLqTKO2kjd197fYZw"
            ],
        ]);
    }
}
