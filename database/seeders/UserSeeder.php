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
                'name' => 'leniad',
                'role' => 'admin',
                'email' => 'leinad@fjeclot.net',
                'password' => Hash::make('fjeClot23#')
            ],
            [
                'name' => 'aletse',
                'role' => 'basic',
                'email' => 'aletse@fjeclot.net',
                'password' => Hash::make('clotFje23@')
            ],
        ];
        DB::table('users')->insert($llista_usuaris);                  
    }
}
