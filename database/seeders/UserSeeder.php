<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'level' => 'Admin',
        	'password' => bcrypt('12345678')
        ]);

        
        DB::table('users')->insert([
        	'name' => 'Pengelola',
        	'email' => 'pengelola@gmail.com',
        	'level' => 'Pengelola',
        	'password' => bcrypt('12345678')
        ]);
    }
}
