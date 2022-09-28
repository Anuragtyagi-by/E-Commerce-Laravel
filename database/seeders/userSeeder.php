<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; 
use Illuminate\support\Facades\Hash;    

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'aman',
            'email' => 'amantyagi766@gmail.com',
            'password' => Hash::make('12345')

        ]);
    }
}
