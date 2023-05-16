<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HabitacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $llistaHabitacions = [
            [
                'codiHab' => '1234ABC',
                'capacitat' => '2',
                'mida' => 'Gran',
                'pensio' => 'Pensió completa',
                'vistes' => 'Mar',
                'llits' => 'Matrimoni',
                'n_llits' => '1',
                'terrassa' => '1',
                'calefaccio' => '1',
                'aire_acondicionat' => '1',
                'nens' => '1',
                'animals' => '1',
            ],
            [
                'codiHab' => '1234ABD',
                'capacitat' => '4',
                'mida' => 'Petita',
                'pensio' => 'Només allotjament',
                'vistes' => 'Interior',
                'llits' => 'Individuals',
                'n_llits' => '3',
                'terrassa' => '0',
                'calefaccio' => '1',
                'aire_acondicionat' => '0',
                'nens' => '1',
                'animals' => '0',
            ],
            [
                'codiHab' => '1234ABE',
                'capacitat' => '2',
                'mida' => 'Normal',
                'pensio' => 'Allotjament i esmorzar inclòs',
                'vistes' => 'Muntanya',
                'llits' => 'Matrimoni',
                'n_llits' => '1',
                'terrassa' => '1',
                'calefaccio' => '0',
                'aire_acondicionat' => '1',
                'nens' => '0',
                'animals' => '1',
            ],                         
        ];
        DB::table('habitacions')->insert($llistaHabitacions);                  
    }
}