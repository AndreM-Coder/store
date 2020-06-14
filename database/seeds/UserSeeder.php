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
            'password' => bcrypt('admin'),
            'is_admin' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('123456789'),
            'is_admin' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'guest',
            'email' => 'guest@guest.com',
            'password' => bcrypt('123456789'),
            'is_admin' => 0,
        ]);
    }
}
