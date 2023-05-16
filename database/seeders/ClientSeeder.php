<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $llista_clients = [
            [
                'dni' => '12345678N',
                'nom_complet' => 'Carles Pons',
                'edat' => '33',
                'telefon' => '933666777',
                'adreca' => 'C/Valencia 487',
                'ciutat' => 'Barcelona',
                'pais' => 'Espanya',
                'email' => 'carlespons@gmail.com',
                'tipus_targeta' => 'Dèbit',
                'num_targeta' => '5540500001000004',
            ],
            [
                'dni' => '87654321X',
                'nom_complet' => 'Joan Correa',
                'edat' => '25',
                'telefon' => '678933456',
                'adreca' => 'C/Cantabria 41',
                'ciutat' => 'Barcelona',
                'pais' => 'Espanya',
                'email' => 'joancorrea@gmail.com',
                'tipus_targeta' => 'Crèdit',
                'num_targeta' => '5540544551005704',
            ],
            [
                'dni' => '65484931B',
                'nom_complet' => 'María García',
                'edat' => '24',
                'telefon' => '722465879',
                'adreca' => 'C/Perú 12',
                'ciutat' => 'Mollet del Vallès',
                'pais' => 'Espanya',
                'email' => 'mariagarcia@gmail.com',
                'tipus_targeta' => 'Crèdit',
                'num_targeta' => '6647924655355704',
            ],                         
        ];
        DB::table('clients')->insert($llista_clients);                  
    }
}
