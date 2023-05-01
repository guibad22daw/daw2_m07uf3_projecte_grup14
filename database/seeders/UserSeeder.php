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
                'tipus' => 'Gerent',
                'email' => 'guillem@happyflower.com',
                'password' => Hash::make('FjeClot23#'),
            ],
            [
                'nom_complet' => 'Judit Perea',
                'tipus' => 'Treballador',
                'email' => 'judit@happyflower.com',
                'password' => Hash::make('FjeClot23#'),
            ],
        ];
        DB::table('users')->insert($llista_usuaris);                  
    }
}
