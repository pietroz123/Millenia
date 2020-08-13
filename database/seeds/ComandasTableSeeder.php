<?php

use Illuminate\Database\Seeder;

class ComandasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comandas')->delete();
        
        \DB::table('comandas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cliente' => 1,
                'aberta' => 0,
                'created_at' => '2020-08-13 00:31:37',
                'updated_at' => '2020-08-13 00:31:50',
            ),
            1 => 
            array (
                'id' => 2,
                'id_cliente' => 1,
                'aberta' => 1,
                'created_at' => '2020-08-13 00:42:36',
                'updated_at' => '2020-08-13 00:42:36',
            ),
            2 => 
            array (
                'id' => 3,
                'id_cliente' => 6,
                'aberta' => 1,
                'created_at' => '2020-08-13 00:42:49',
                'updated_at' => '2020-08-13 00:42:49',
            ),
            3 => 
            array (
                'id' => 4,
                'id_cliente' => 14,
                'aberta' => 1,
                'created_at' => '2020-08-13 00:43:10',
                'updated_at' => '2020-08-13 00:43:10',
            ),
        ));
        
        
    }
}