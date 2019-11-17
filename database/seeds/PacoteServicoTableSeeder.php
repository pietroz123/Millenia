<?php

use Illuminate\Database\Seeder;

class PacoteServicoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pacote_servico')->delete();
        
        \DB::table('pacote_servico')->insert(array (
            0 => 
            array (
                'id_pacote' => 1,
                'id_servico' => 2,
            ),
            1 => 
            array (
                'id_pacote' => 1,
                'id_servico' => 3,
            ),
            2 => 
            array (
                'id_pacote' => 2,
                'id_servico' => 4,
            ),
            3 => 
            array (
                'id_pacote' => 2,
                'id_servico' => 6,
            ),
            4 => 
            array (
                'id_pacote' => 2,
                'id_servico' => 7,
            ),
            5 => 
            array (
                'id_pacote' => 2,
                'id_servico' => 8,
            ),
            6 => 
            array (
                'id_pacote' => 3,
                'id_servico' => 3,
            ),
            7 => 
            array (
                'id_pacote' => 3,
                'id_servico' => 9,
            ),
            8 => 
            array (
                'id_pacote' => 4,
                'id_servico' => 2,
            ),
            9 => 
            array (
                'id_pacote' => 4,
                'id_servico' => 9,
            ),
        ));
        
        
    }
}