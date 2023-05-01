<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $llistaReserves = [
            [
                'dni' => '12345678N',
                'codiHab' => '1234ABC',
                'data_entrada' => '2023-04-27',
                'data_sortida' => '2023-04-29',
                'pensio' => 'Només allotjament',
                'preu_dia' => '80',
                'asseguranca' => 'Franquícia fins 500 euros',
            ],
        ];
        DB::table('reserves')->insert($llistaReserves);                  
    }
}