<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genres')->insert([
            [
                'name' => 'KPOP'
             ],
            [
                'name' => 'JPOP'
            ],
            
            [
                'name' => '洋楽'
            ],
            [
                'name' => 'HIPHOP・ラップ'
            ],
            [
                'name' => 'R&B・ソウル'
            ],
            [
                'name' => 'ジャズ'
            ],
            [
                'name' => 'クラシック'
            ],
            [
                'name' => 'ロック・ポップス'
            ],
            [
                'name' => 'アニメ/ゲーム'
            ],
            [
                'name' => '歌謡曲'
            ],
            [
                'name' => 'ハードロック・メタル'
            ],
            [
                'name' => 'その他'
            ],
        ]);
    }
}
