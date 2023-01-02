<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            ['content' => '東京の難読地名クイズ', 'pos'=>1],
            ['content' => '広島の難読地名クイズ', 'pos'=>2]
        ]);
    }
}
