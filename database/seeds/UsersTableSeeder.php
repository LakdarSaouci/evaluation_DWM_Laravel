<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Anto',
            'email' => 'anto@hotmail.com',
            'password' => bcrypt('Anto1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'Pascal',
            'email' => 'pascal@tuta.io',
            'password' => bcrypt('codeislife'),
        ]);
    }
}
