<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
                'id' => '1',
                'tag_name' => '筋トレ',
                'menu_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
    }
}
