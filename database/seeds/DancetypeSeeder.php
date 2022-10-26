<?php

use Illuminate\Database\Seeder;

class DancetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dance_types')->insert([
            [
                'name' => 'コピーダンス'
             ],
            [
                'name' => 'オリジナル振り付け'
            ],
            [
                'name' => 'その他'
            ],
        ]);
    }
}
