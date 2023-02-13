<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
                'id' => '1',
                'name' => 'トレーニングメニュー1',
                'title' => '2時間',
                'spent_time' => '2時間',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
                ]);
    }
}
