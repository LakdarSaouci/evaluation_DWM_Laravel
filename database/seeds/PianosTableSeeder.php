<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'marque' => Str::random(10),
            'couleur_id' => 1,
            'annee' => 2005,
        ])

        DB::table('pianos')->insert([
            'marque' => Str::random(10),
            'couleur_id' => 2,
            'annee' => 2015,
        ])
    }
}
