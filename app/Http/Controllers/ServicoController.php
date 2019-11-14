<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cadastros.servicos.index', [
            'servicos' => Servico::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cadastros.servicos.create', [
            'servico' => new Servico,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Criar novo servico
         */
        $servico = new Servico;
        $servico->nome = request('nome');
        $servico->preco = request('preco');
        $servico->comissao = request('comissao');
        $servico->tempo_execucao_em_minutos = request('tempo-execucao');
        $servico->pontos = request('pontos');
        $servico->duracao_em_dias = request('duracao');
        $servico->enviar_notificacao_cliente = request('enviar-notificacao') ? true : false;
        $servico->ativo = request('ativo') ? true : false;
        $servico->observacoes = request('observacoes');
        $servico->save();

        return redirect()->route('servicos.index')->with('success', 'Serviço cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.cadastros.servicos.edit', [
            'servico' => Servico::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * Atualizar servico
         */
        $servico = Servico::find($id);
        $servico->nome = request('nome');
        $servico->preco = request('preco');
        $servico->comissao = request('comissao');
        $servico->tempo_execucao_em_minutos = request('tempo-execucao');
        $servico->pontos = request('pontos');
        $servico->duracao_em_dias = request('duracao');
        $servico->enviar_notificacao_cliente = request('enviar-notificacao') ? true : false;
        $servico->ativo = request('ativo') ? true : false;
        $servico->observacoes = request('observacoes');
        $servico->save();

        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * Remove o servico
         */
        $servico = Servico::find($id);
        $servico->delete();

        return redirect()->route('servicos.index')->with('success', 'Serviço removido com sucesso');
    }
}
