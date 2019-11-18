<?php

use Illuminate\Database\Seeder;

class AgendamentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agendamentos')->delete();
        
        \DB::table('agendamentos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_servico' => 8,
                'id_profissional' => 4,
                'id_cliente' => 14,
                'titulo' => '[Pedicure] Helena Teixeira Ducati',
                'inicio' => '2019-11-11 11:00:00',
                'fim' => '2019-11-11 12:30:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-17 00:39:52',
                'updated_at' => '2019-11-17 00:39:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_servico' => 4,
                'id_profissional' => 7,
                'id_cliente' => 16,
                'titulo' => '[Sombrancelha] Lara Gomes Machado',
                'inicio' => '2019-11-19 13:00:00',
                'fim' => '2019-11-19 14:30:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-17 03:25:38',
                'updated_at' => '2019-11-17 03:25:38',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_servico' => 3,
                'id_profissional' => 11,
                'id_cliente' => 6,
                'titulo' => '[Corte Masculino] Juan Davi Gael da Costa',
                'inicio' => '2019-11-18 11:00:00',
                'fim' => '2019-11-18 12:30:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:11:38',
                'updated_at' => '2019-11-18 02:11:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_servico' => 5,
                'id_profissional' => 2,
                'id_cliente' => 3,
                'titulo' => '[Escova] Ana Paula Machado Gomes',
                'inicio' => '2019-11-20 11:15:00',
                'fim' => '2019-11-20 12:45:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:11:44',
                'updated_at' => '2019-11-18 02:11:44',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_servico' => 2,
                'id_profissional' => 1,
                'id_cliente' => 4,
                'titulo' => '[Corte Feminino] João Machado Gomes',
                'inicio' => '2019-11-19 11:15:00',
                'fim' => '2019-11-19 12:45:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:11:50',
                'updated_at' => '2019-11-18 02:11:50',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_servico' => 7,
                'id_profissional' => 4,
                'id_cliente' => 15,
                'titulo' => '[Manicure] Helena Teixeira Ducati',
                'inicio' => '2019-11-18 14:30:00',
                'fim' => '2019-11-18 16:00:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:11:59',
                'updated_at' => '2019-11-18 02:11:59',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'id_servico' => 7,
                'id_profissional' => 4,
                'id_cliente' => 12,
                'titulo' => '[Manicure] Helena Teixeira Ducati',
                'inicio' => '2019-11-21 13:00:00',
                'fim' => '2019-11-21 14:30:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:12:21',
                'updated_at' => '2019-11-18 02:12:21',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'id_servico' => 2,
                'id_profissional' => 9,
                'id_cliente' => 5,
                'titulo' => '[Corte Feminino] Bernardo Teixeira Amaral',
                'inicio' => '2019-11-22 10:30:00',
                'fim' => '2019-11-22 12:00:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:12:29',
                'updated_at' => '2019-11-18 02:12:29',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'id_servico' => 4,
                'id_profissional' => 12,
                'id_cliente' => 11,
                'titulo' => '[Sombrancelha] Tatiane Juliana Malu Souza',
                'inicio' => '2019-11-21 11:00:00',
                'fim' => '2019-11-21 12:30:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:12:37',
                'updated_at' => '2019-11-18 02:12:37',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'id_servico' => 3,
                'id_profissional' => 11,
                'id_cliente' => 10,
                'titulo' => '[Corte Masculino] Juan Davi Gael da Costa',
                'inicio' => '2019-11-20 14:45:00',
                'fim' => '2019-11-20 16:15:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:12:55',
                'updated_at' => '2019-11-18 02:12:55',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'id_servico' => 8,
                'id_profissional' => 4,
                'id_cliente' => 14,
                'titulo' => '[Pedicure] Helena Teixeira Ducati',
                'inicio' => '2019-11-22 15:30:00',
                'fim' => '2019-11-22 17:00:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:13:08',
                'updated_at' => '2019-11-18 02:13:08',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'id_servico' => 4,
                'id_profissional' => 12,
                'id_cliente' => 9,
                'titulo' => '[Sombrancelha] Tatiane Juliana Malu Souza',
                'inicio' => '2019-11-19 15:30:00',
                'fim' => '2019-11-19 17:00:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:13:28',
                'updated_at' => '2019-11-18 02:13:28',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'id_servico' => 6,
                'id_profissional' => 7,
                'id_cliente' => 16,
                'titulo' => '[Maquiagem] Lara Gomes Machado',
                'inicio' => '2019-11-20 13:30:00',
                'fim' => '2019-11-20 15:00:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:13:41',
                'updated_at' => '2019-11-18 02:13:41',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'id_servico' => 3,
                'id_profissional' => 1,
                'id_cliente' => 4,
                'titulo' => '[Corte Masculino] João Machado Gomes',
                'inicio' => '2019-11-18 14:00:00',
                'fim' => '2019-11-18 15:30:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:15:24',
                'updated_at' => '2019-11-18 02:15:24',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'id_servico' => 7,
                'id_profissional' => 4,
                'id_cliente' => 6,
                'titulo' => '[Manicure] Helena Teixeira Ducati',
                'inicio' => '2019-11-22 12:45:00',
                'fim' => '2019-11-22 14:15:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:15:41',
                'updated_at' => '2019-11-18 02:15:41',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'id_servico' => 2,
                'id_profissional' => 9,
                'id_cliente' => 17,
                'titulo' => '[Corte Feminino] Bernardo Teixeira Amaral',
                'inicio' => '2019-11-22 12:30:00',
                'fim' => '2019-11-22 14:00:00',
                'observacoes' => NULL,
                'created_at' => '2019-11-18 02:15:53',
                'updated_at' => '2019-11-18 02:15:53',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}