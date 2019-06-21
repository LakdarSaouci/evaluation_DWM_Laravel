<?php

use Illuminate\Database\Seeder;

class CouleursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couleurs')->insert([
            'name' => 'Noir',
        ]);
        DB::table('couleurs')->insert([
            'name' => 'Blanc',
        ]);
        DB::table('couleurs')->insert([
            'name' => 'Gris',
        ]);
    }
}
