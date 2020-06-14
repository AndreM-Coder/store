<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/1.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/2.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/3.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/4.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/5.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/6.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/7.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/8.jpg',
            'type' => 1,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/sabeeee.fw_.png',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/n_BIXtlK_400x400.jpg',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/sabeeee.fw_.png',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/meme_770x433_acf_cropped.jpg',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/game-of-thrones-winterfell-battle-memes_fullsize_story1.jpg',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/EdYnvhtE_400x400.jpg',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/950d0de951d47c984163dfa49e92226b.jpg',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/6e43fc783ffc88bc35e81cb3358eb938.jpg',
            'type' => 2,
            'status' => 0,
        ]);
        DB::table('image')->insert([
            'user_id' => 1,
            'name' => "",
            'path' => 'uploads/images/1_kUWWP2Ew7RV43bFo-ZMMZQ.jpeg',
            'type' => 2,
            'status' => 0,
        ]);

    }
}
