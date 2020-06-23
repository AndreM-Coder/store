<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Single Malted Whisky',
            'discount' => "2",
        ]);
        DB::table('category')->insert([
            'name' => 'Oak Aged Whisky',
            'discount' => "2",
        ]);
        DB::table('category')->insert([
            'name' => 'Malted Whisky',
            'discount' => "10",
        ]);
    }
}
