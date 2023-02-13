<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
                'id' => '1',
                'course_name' => 'トレーニングメニュー1',
                'sum_spent_time' => '2時間',
                'menu_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
                ]);
    }
}
