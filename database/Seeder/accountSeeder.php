<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;


class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'username' => 'Administrator',
            'password' => Hash::make('admin@123$%^'),
            'email' => 'administrator@gmail.com',
            'isAdmin' => true,
        ]);
    }
}
