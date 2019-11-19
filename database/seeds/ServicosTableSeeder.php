<?php

use Illuminate\Database\Seeder;
use App\Servico;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servico::truncate();

        Servico::create([
            'nome' => 'Coloração',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Corte Feminino',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Corte Masculino',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Sobrancelha',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Escova',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Maquiagem',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Manicure',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Pedicure',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);
        Servico::create([
            'nome' => 'Penteado',
            'preco' => '60',
            'comissao' => '6',
            'tempo_execucao_em_minutos' => '90',
            'pontos' => '200',
            'duracao_em_dias' => '30',
            'enviar_notificacao_cliente' => true,
            'ativo' => true,
            'observacoes' => '',
        ]);

    }
}
