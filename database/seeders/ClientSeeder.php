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
        ];
        DB::table('clients')->insert($llista_clients);                  
    }
}
