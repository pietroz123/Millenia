<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produtos')->delete();
        
        \DB::table('produtos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Shampoo 2 em 1',
                'id_marca' => 2,
                'preco' => 30.0,
                'pontos' => 20,
                'created_at' => '2019-11-19 02:15:28',
                'updated_at' => '2019-11-19 02:15:28',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Uniq One Coconut',
                'id_marca' => 6,
                'preco' => 7.89,
                'pontos' => 30,
                'created_at' => '2019-11-19 03:22:49',
                'updated_at' => '2019-11-20 16:23:07',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Máscara 500ml',
                'id_marca' => 1,
                'preco' => 15.09,
                'pontos' => 45,
                'created_at' => '2019-11-19 03:26:46',
                'updated_at' => '2019-11-19 03:32:16',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Máscara de Nutrição 150ml',
                'id_marca' => 7,
                'preco' => 90.99,
                'pontos' => 70,
                'created_at' => '2019-11-19 03:28:12',
                'updated_at' => '2019-11-20 16:23:29',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Gel Modelador em Spray 195ml',
                'id_marca' => 2,
                'preco' => 12.09,
                'pontos' => 35,
                'created_at' => '2019-11-19 03:29:33',
                'updated_at' => '2019-11-19 03:32:10',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Máscara Capilar 200ml',
                'id_marca' => 2,
                'preco' => 20.99,
                'pontos' => 80,
                'created_at' => '2019-11-19 03:29:56',
                'updated_at' => '2019-11-19 03:31:54',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Shampoo 250ml',
                'id_marca' => 2,
                'preco' => 108.9,
                'pontos' => 75,
                'created_at' => '2019-11-19 03:30:32',
                'updated_at' => '2019-11-19 03:32:05',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Máscara de Nutrição 200ml',
                'id_marca' => 2,
                'preco' => 20.89,
                'pontos' => 90,
                'created_at' => '2019-11-19 03:31:30',
                'updated_at' => '2019-11-19 03:31:43',
            ),
        ));
        
        
    }
}