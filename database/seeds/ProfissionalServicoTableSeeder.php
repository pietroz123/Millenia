<?php

use Illuminate\Database\Seeder;

class ProfissionalServicoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profissional_servico')->delete();
        
        \DB::table('profissional_servico')->insert(array (
            0 => 
            array (
                'id_profissional' => 1,
                'id_servico' => 2,
            ),
            1 => 
            array (
                'id_profissional' => 1,
                'id_servico' => 3,
            ),
            2 => 
            array (
                'id_profissional' => 1,
                'id_servico' => 9,
            ),
            3 => 
            array (
                'id_profissional' => 2,
                'id_servico' => 5,
            ),
            4 => 
            array (
                'id_profissional' => 2,
                'id_servico' => 6,
            ),
            5 => 
            array (
                'id_profissional' => 4,
                'id_servico' => 7,
            ),
            6 => 
            array (
                'id_profissional' => 4,
                'id_servico' => 8,
            ),
            7 => 
            array (
                'id_profissional' => 7,
                'id_servico' => 4,
            ),
            8 => 
            array (
                'id_profissional' => 7,
                'id_servico' => 6,
            ),
            9 => 
            array (
                'id_profissional' => 9,
                'id_servico' => 1,
            ),
            10 => 
            array (
                'id_profissional' => 9,
                'id_servico' => 2,
            ),
            11 => 
            array (
                'id_profissional' => 9,
                'id_servico' => 3,
            ),
            12 => 
            array (
                'id_profissional' => 11,
                'id_servico' => 2,
            ),
            13 => 
            array (
                'id_profissional' => 11,
                'id_servico' => 3,
            ),
            14 => 
            array (
                'id_profissional' => 11,
                'id_servico' => 9,
            ),
            15 => 
            array (
                'id_profissional' => 12,
                'id_servico' => 4,
            ),
        ));
        
        
    }
}