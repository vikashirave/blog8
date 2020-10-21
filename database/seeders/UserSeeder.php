<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

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
          'name'=>'belamy blake',
          'username'=>'belamy',
          'email'=>'belamy@gmail.com',
          'password'=>Hash::make('12345') 
        ]);
    }
}
