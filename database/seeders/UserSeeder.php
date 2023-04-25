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
        $llista_usuaris = [
            [
                'nom_complet' => 'Guillem Badenas',
                'tipus' => 'gerent',
                'email' => 'guillem@fjeclot.net',
                'password' => Hash::make('fjeClot23#'),
            ],
            [
                'nom_complet' => 'Judit Perea',
                'tipus' => 'gerent',
                'email' => 'judit@fjeclot.net',
                'password' => Hash::make('fjeClot23#'),
            ],
        ];
        DB::table('users')->insert($llista_usuaris);                  
    }
}
