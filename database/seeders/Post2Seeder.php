<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'id' => '1',
                'menu_name' => 'トレーニングメニュー1',
                'menu_title' => '腹筋',
                'menu_body' => '腹筋を30回を3セット行う',
                'menu_time_spent' => '30分',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
                ]);
    }
}
