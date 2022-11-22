<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
            [
                'question_id' => 1,
                'choice' => 'たかなわ',
                'valid' => true,
            ],
            [
                'question_id' => 1,
                'choice' => 'たかわ',
                'valid' => false,
            ],
            [
                'question_id' => 1,
                'choice' => 'こうわ',
                'valid' => false,
            ],
            [
                'question_id' => 2,
                'choice' => 'かめど',
                'valid' => false,
            ],
            [
                'question_id' => 2,
                'choice' => 'かめと',
                'valid' => false,
            ],
            [
                'question_id' => 2,
                'choice' => 'かめいど',
                'valid' => true,
            ],
            [
                'question_id' => 3,
                'choice' => 'むこうひら',
                'valid' => false,
            ],
            [
                'question_id' => 3,
                'choice' => 'むきひら',
                'valid' => false,
            ],
            [
                'question_id' => 3,
                'choice' => 'むかいなだ',
                'valid' => true,
            ],
        ]);
    }
}
