<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Servico;
use App\Comanda;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas_abertas = Comanda::all()->where('aberta', true);
        $comandas_fechadas = Comanda::all()->where('aberta', false);

        return view('dashboard.comandas.index', [
            'comandas_abertas' => $comandas_abertas,
            'comandas_fechadas' => $comandas_fechadas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.comandas.create', [
            'comanda' => new Comanda,
            'clientes' => Cliente::all(),
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
         * Cria nova comanda
         */
        $comanda = new Comanda;
        $comanda->id_cliente = request('cliente');
        $comanda->save();
        
        /**
         * Atribui os servicos
         */
        $comanda->servicos()->sync(request('servicos'));

        return redirect()->route('comandas.index')->with('success', 'Comanda aberta com sucesso');
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
        // Recupera a Comanda
        $comanda = Comanda::find($id);

        // Recupera os serviços
        $servicosSelecionados = array();
        foreach ($comanda->servicos->toArray() as $servico) {
            array_push($servicosSelecionados, $servico['id']);
        }

        return view('dashboard.comandas.edit', [
            'comanda' => $comanda,
            'clientes' => Cliente::all(),
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
        /**
         * Atualiza a comanda
         */
        $comanda = Comanda::find($id);
        $comanda->aberta = !request()->has('fechar-comanda');
        $comanda->id_cliente = request('cliente');
        $comanda->save();

        /**
         * Atribui os servicos
         */
        $comanda->servicos()->sync(request('servicos'));

        /**
         * Mensagem correta do redirect
         */
        if (request()->has('fechar-comanda')) {
            return redirect()->route('comandas.edit', $comanda->id)->with(
                'success', 'Comanda fechada com sucesso'
            );
        }

        else if (request()->has('abrir-comanda')) {
            return redirect()->route('comandas.edit', $comanda->id)->with(
                'success', 'Comanda reaberta com sucesso'
            );
        }        

        return redirect()->route('comandas.edit', $comanda->id)->with(
            'success', 'Comanda atualizada com sucesso'
        );
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
