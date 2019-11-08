<?php

use Illuminate\Database\Seeder;
use JsonMachine\JsonMachine;
use App\Profissao;

class ProfissoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate
        Profissao::truncate();

        /**
         * Get all profissoes
         */
        $profissoes = JsonMachine::fromFile(base_path() . '/database/seeds/resources/profissoes.json');

        /**
         * Loop through each Profissao 
         */
        foreach ($profissoes as $profissao) {

            // Save Profissao
            Profissao::create([
                'nome' => $profissao['TITULO']
            ]);

        }



    }
}
