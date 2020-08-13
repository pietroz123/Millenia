<?php

use Illuminate\Database\Seeder;

class ComandaServicoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comanda_servico')->delete();
        
        \DB::table('comanda_servico')->insert(array (
            0 => 
            array (
                'id_comanda' => 1,
                'id_servico' => 3,
            ),
            1 => 
            array (
                'id_comanda' => 1,
                'id_servico' => 9,
            ),
            2 => 
            array (
                'id_comanda' => 2,
                'id_servico' => 3,
            ),
            3 => 
            array (
                'id_comanda' => 2,
                'id_servico' => 9,
            ),
            4 => 
            array (
                'id_comanda' => 3,
                'id_servico' => 1,
            ),
            5 => 
            array (
                'id_comanda' => 3,
                'id_servico' => 2,
            ),
            6 => 
            array (
                'id_comanda' => 3,
                'id_servico' => 4,
            ),
            7 => 
            array (
                'id_comanda' => 4,
                'id_servico' => 1,
            ),
            8 => 
            array (
                'id_comanda' => 4,
                'id_servico' => 2,
            ),
            9 => 
            array (
                'id_comanda' => 4,
                'id_servico' => 5,
            ),
            10 => 
            array (
                'id_comanda' => 4,
                'id_servico' => 6,
            ),
            11 => 
            array (
                'id_comanda' => 4,
                'id_servico' => 7,
            ),
            12 => 
            array (
                'id_comanda' => 4,
                'id_servico' => 8,
            ),
        ));
        
        
    }
}