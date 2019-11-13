<?php

use Illuminate\Database\Seeder;
use App\Cidade;
use App\Estado;


class CidadesEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidade::truncate();
        Estado::truncate();

        date_default_timezone_set('America/Sao_Paulo');

        $row = 1;
        
        if (($handle = fopen(base_path() . '/database/seeds/resources/Meso_Micro.csv', "r")) !== FALSE) {

            while ( (($data = fgetcsv($handle, 1000, ";")) !== FALSE) ) {

                if ($row == 1) {
                    $row++;
                    continue;
                }

                $num = count($data);
                echo "Inserting $row of 38976:\n";
                $row++;

                // UF
                $co_uf              = $data[2];
                $sigla_uf           = $data[3];
                $nome_uf            = $data[4];

                Estado::firstOrCreate([
                    'id' => $co_uf,
                    'nome' => $nome_uf,
                    'sigla' => $sigla_uf,
                ]);

                
                // Municipio
                $co_municipio       = $data[5];
                $nome_municipio     = $data[6];
                
                Cidade::firstOrCreate([
                    'id' => $co_municipio,
                    'nome' => $nome_municipio,
                    'id_estado' => $co_uf,
                ]);

            }
            
            fclose($handle);
        }
    }
}
