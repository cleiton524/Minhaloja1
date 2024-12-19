<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Cleiton Quiorato',
                'username' => 'msflix',
                'email' => 'cursoquioratocleiton@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('999cldvC')
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedorquioratocleiton@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('999cldvC')
            ],
            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'clientequioratocleiton@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('999cldvC')
            ]
        ]);
    }
}
