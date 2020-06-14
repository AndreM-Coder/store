<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',            
            'address' => 'Rua do Admin',
            'city' => 'city do admin',
            'country' => 'country do admin',
            'post_code' => '1133-323',
            'phone' => '+351 nº do admin',
            'password' => bcrypt('admin'),
            'is_admin' => 1,

        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'address' => 'Rua do user',
            'city' => 'city do user',
            'country' => 'country do user',
            'post_code' => '1443-323',
            'phone' => '+351 nº do user',
            'password' => bcrypt('123456789'),
            'is_admin' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'guest',
            'email' => 'guest@guest.com',
            'address' => 'Rua do Guest',
            'city' => 'city do Guest',
            'country' => 'country do guest',
            'post_code' => '4133-323',
            'phone' => '+351 nº do guest',
            'password' => bcrypt('123456789'),
            'is_admin' => 0,
        ]);
    }
}
