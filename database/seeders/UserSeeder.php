<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Dharini',
            'email'=>'dharini@gmail.com',
            'email_verified_at' => '2021-10-16',
            'password'=>Hash::make('12345'),
            'created_at' => '2021-10-16',
            'updated_at' => '2021-10-16'
        ]);
    }
}
