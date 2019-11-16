<?php

use Illuminate\Database\Seeder;

class ProfissionaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profissionais')->delete();
        
        \DB::table('profissionais')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'João Machado Gomes',
                'email' => 'joao.gomes@uol.com.br',
                'cpf' => '714.772.640-51',
                'rg' => '42.943.412-1',
            'telefone_celular' => '(19) 95736-1034',
            'telefone_residencial' => '(19) 2323-4496',
                'id_cidade' => 3538709,
                'cep' => '13405-247',
                'bairro' => 'Vila Rezende',
                'rua' => 'Travessa Ângelo Valler',
                'numero_rua' => 666,
                'complemento_rua' => '-',
                'horario_entrada' => '12:00:00',
                'horario_saida' => '16:00:00',
                'cor_agenda' => '#d50000',
                'created_at' => '2019-11-16 01:23:47',
                'updated_at' => '2019-11-16 01:23:47',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Ana Paula Machado Gomes',
                'email' => 'ana.paula.gomes@icloud.com',
                'cpf' => '503.994.453-58',
                'rg' => '40.328.944-0',
            'telefone_celular' => '(31) 96116-3158',
            'telefone_residencial' => '(31) 1224-6266',
                'id_cidade' => 3106200,
                'cep' => '31210-440',
                'bairro' => 'Bonfim',
                'rua' => 'Rua Anfibólios',
                'numero_rua' => 135,
                'complemento_rua' => '-',
                'horario_entrada' => '14:00:00',
                'horario_saida' => '18:00:00',
                'cor_agenda' => '#e67c73',
                'created_at' => '2019-11-16 01:24:49',
                'updated_at' => '2019-11-16 01:24:49',
            ),
            2 => 
            array (
                'id' => 4,
                'nome' => 'Helena Teixeira Ducati',
                'email' => 'helena.ducati@yahoo.com',
                'cpf' => '460.375.700-00',
                'rg' => '41.875.789-6',
            'telefone_celular' => '(11) 95641-7782',
            'telefone_residencial' => '(11) 2131-6119',
                'id_cidade' => 3550308,
                'cep' => '05421-010',
                'bairro' => 'Pinheiros',
                'rua' => 'Rua Álvaro Anes',
                'numero_rua' => 129,
                'complemento_rua' => '-',
                'horario_entrada' => '10:00:00',
                'horario_saida' => '16:00:00',
                'cor_agenda' => '#f4511e',
                'created_at' => '2019-11-16 01:26:08',
                'updated_at' => '2019-11-16 01:26:08',
            ),
            3 => 
            array (
                'id' => 7,
                'nome' => 'Lara Gomes Machado',
                'email' => 'lara.machado@globo.com',
                'cpf' => '679.613.680-27',
                'rg' => '29.772.690-0',
            'telefone_celular' => '(51) 99557-4197',
            'telefone_residencial' => '(51) 7792-9538',
                'id_cidade' => 4314902,
                'cep' => '91751-110',
                'bairro' => 'Ipanema',
                'rua' => 'Rua Condado',
                'numero_rua' => 373,
                'complemento_rua' => '-',
                'horario_entrada' => '15:00:00',
                'horario_saida' => '18:00:00',
                'cor_agenda' => '#f6bf26',
                'created_at' => '2019-11-16 01:27:20',
                'updated_at' => '2019-11-16 01:27:20',
            ),
            4 => 
            array (
                'id' => 9,
                'nome' => 'Bernardo Teixeira Amaral',
                'email' => 'bernardo.amaral@uol.com.br',
                'cpf' => '689.076.288-66',
                'rg' => '15.803.973-7',
            'telefone_celular' => '(11) 99930-8381',
            'telefone_residencial' => '(11) 8688-4061',
                'id_cidade' => 3550308,
                'cep' => '01007-040',
                'bairro' => 'Centro',
                'rua' => 'Parque Anhangabaú',
                'numero_rua' => 639,
                'complemento_rua' => '-',
                'horario_entrada' => '10:00:00',
                'horario_saida' => '15:00:00',
                'cor_agenda' => '#33b679',
                'created_at' => '2019-11-16 01:30:03',
                'updated_at' => '2019-11-16 01:30:03',
            ),
            5 => 
            array (
                'id' => 11,
                'nome' => 'Juan Davi Gael da Costa',
                'email' => 'juandavigaeldacosta@gmail.com',
                'cpf' => '159.255.013-49',
                'rg' => '14.148.792-6',
            'telefone_celular' => '(63) 98351-1527',
            'telefone_residencial' => '(63) 3508-2860',
                'id_cidade' => 2101970,
                'cep' => '77420-110',
                'bairro' => 'Jardim das Bandeiras',
                'rua' => 'Avenida Dom Pedro II',
                'numero_rua' => 958,
                'complemento_rua' => '-',
                'horario_entrada' => '12:00:00',
                'horario_saida' => '17:00:00',
                'cor_agenda' => '#0b8043',
                'created_at' => '2019-11-16 01:31:42',
                'updated_at' => '2019-11-16 01:31:42',
            ),
            6 => 
            array (
                'id' => 12,
                'nome' => 'Tatiane Juliana Malu Souza',
                'email' => 'ttatiane@terra.com.br',
                'cpf' => '218.034.466-09',
                'rg' => '24.271.477-8',
            'telefone_celular' => '(92) 98972-0634',
            'telefone_residencial' => '(92) 2775-1668',
                'id_cidade' => 1302603,
                'cep' => '69093-053',
                'bairro' => 'Colônia Terra Nova',
                'rua' => 'Rua Marajoara',
                'numero_rua' => 811,
                'complemento_rua' => 'de 261/262 ao fim',
                'horario_entrada' => '10:00:00',
                'horario_saida' => '18:00:00',
                'cor_agenda' => '#039be5',
                'created_at' => '2019-11-16 01:32:56',
                'updated_at' => '2019-11-16 01:32:56',
            ),
        ));
        
        
    }
}