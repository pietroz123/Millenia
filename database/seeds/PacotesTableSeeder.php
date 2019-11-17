<?php

use Illuminate\Database\Seeder;

class PacotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pacotes')->delete();
        
        \DB::table('pacotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Corte em Casal',
                'valor_sem_desconto' => 120.0,
                'valor_com_desconto' => 84.0,
                'desconto' => 30.0,
                'descricao' => 'Válido somente de Terça e Quinta.',
                'ativo' => 1,
                'created_at' => '2019-11-17 01:01:07',
                'updated_at' => '2019-11-17 01:01:07',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Beleza Pura',
                'valor_sem_desconto' => 240.0,
                'valor_com_desconto' => 192.0,
                'desconto' => 20.0,
                'descricao' => 'Válido de Sexta-Feira.',
                'ativo' => 1,
                'created_at' => '2019-11-17 01:02:03',
                'updated_at' => '2019-11-17 01:02:03',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Estilo para Homem',
                'valor_sem_desconto' => 120.0,
                'valor_com_desconto' => 78.0,
                'desconto' => 35.0,
                'descricao' => 'Válido de Sexta Feira.',
                'ativo' => 1,
                'created_at' => '2019-11-17 01:03:22',
                'updated_at' => '2019-11-17 01:03:22',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Estilo para Mulher',
                'valor_sem_desconto' => 120.0,
                'valor_com_desconto' => 96.0,
                'desconto' => 20.0,
                'descricao' => 'Válido de Sexta Feira.',
                'ativo' => 1,
                'created_at' => '2019-11-17 01:03:52',
                'updated_at' => '2019-11-17 01:03:52',
            ),
        ));
        
        
    }
}