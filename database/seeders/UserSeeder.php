<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            [
                'name'      => 'Admin',
                'email'     => 'admin@gmail.com',
                'password'  => Hash::make('admin123'),
            ],
            [
                'name'      => 'Steven LA',
                'email'     => 'stevenleonard271@gmail.com',
                'password'  => Hash::make('steven123'),
            ],
        ]);
    }
}
