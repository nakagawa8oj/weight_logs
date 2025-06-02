<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class WeightlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $param = [
                  'id' => '1',
                  'target_weight' => 65,
                  'weight' => 75,
                  'date' => '20250603',
                  'calories' => '1500',
                  'exircise_time' => '45'
                ];
            DB::table('weightlogs')->insert($param);
    }
}
