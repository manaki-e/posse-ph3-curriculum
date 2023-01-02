<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'content_id' => 1,
                'question' => '高輪',
                'question_image' => 'takanawa',
                'pos' => '1',
            ],
            [
                'content_id' => 1,
                'question' => '亀戸',
                'question_image' => 'kameido',
                'pos' => '2',
            ],
            [
                'content_id' => 2,
                'question' => '向灘',
                'question_image' => 'mukainada',
                'pos' => '1',
            ]
        ]);
    }
}
