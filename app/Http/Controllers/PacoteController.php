<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Pacote;

class PacoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cadastros.pacotes.index', [
            'pacotes' => Pacote::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cadastros.pacotes.create', [
            'pacote' => new Pacote,
            'servicos' => Servico::all(),
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
         * Cria novo pacote
         */
        $pacote = new Pacote;
        $pacote->nome = request('nome');

        $servicos = request('servicos');
        $pacote->valor_sem_desconto = request('valor-sem-desconto');
        $pacote->desconto = request('desconto');
        $pacote->valor_com_desconto = request('valor-com-desconto');
        $pacote->descricao = request('descricao');
        $pacote->ativo = request('ativo') == 'on' ? true : false;
        $pacote->save();

        /**
         * Atribui os servicos
         */
        $pacote->servicos()->sync(request('servicos'));

        return redirect()->route('pacotes.index')->with('success', 'Pacote cadastrado com sucesso');
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
        // Recupera o pacote
        $pacote = Pacote::find($id);

        
        // Recupera os serviços
        $servicosSelecionados = array();
        foreach ($pacote->servicos->toArray() as $servico) {
            array_push($servicosSelecionados, $servico['id']);
        }
        
        return view('dashboard.cadastros.pacotes.edit', [
            'pacote' => $pacote,
            'servicos' => Servico::all(),
            'servicosSelecionados' => $servicosSelecionados,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
