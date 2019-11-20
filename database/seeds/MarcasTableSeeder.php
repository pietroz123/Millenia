<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marcas')->delete();
        
        \DB::table('marcas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Loreal',
                'created_at' => '2019-11-20 13:21:31',
                'updated_at' => '2019-11-20 13:21:31',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Kerastase',
                'created_at' => '2019-11-20 13:21:31',
                'updated_at' => '2019-11-20 13:21:31',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Olenka',
                'created_at' => '2019-11-20 13:21:31',
                'updated_at' => '2019-11-20 13:21:31',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Vella',
                'created_at' => '2019-11-20 13:21:31',
                'updated_at' => '2019-11-20 13:21:31',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Aneto',
                'created_at' => '2019-11-20 13:21:31',
                'updated_at' => '2019-11-20 13:21:31',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Revlon',
                'created_at' => '2019-11-20 16:23:07',
                'updated_at' => '2019-11-20 16:23:07',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Wella',
                'created_at' => '2019-11-20 16:23:29',
                'updated_at' => '2019-11-20 16:23:29',
            ),
        ));
        
        
    }
}