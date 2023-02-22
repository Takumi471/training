<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
                'id' => '1',
                'record_date' => '2023/02/22',
                'body_weight' => '58',
                'time_spent' => '4',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
    }
}
