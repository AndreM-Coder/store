<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_id' => 12365,
            'product_name' => "Jameson The One",
            'category_id' => '1',
            'product_image' => 'uploads/images/1592945775561.jpeg',
            'description' => 'The Best Whisky in the world',
            'price' => '122',
            'stock'=> '63',
        ]);
        DB::table('products')->insert([
            'product_id' => 5415566,
            'product_name' => "William Lawson",
            'category_id' => '2',
            'product_image' => 'uploads/images/1592947432520.jpeg',
            'description' => 'The Second Best Whisky in the world',
            'price' => '114',
            'stock'=> '12',
        ]);
    }
}
