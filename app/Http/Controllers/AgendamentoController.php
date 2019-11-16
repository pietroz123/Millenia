<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Profissional;
use App\Cliente;
use App\Agendamento;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         * Recupera as informações da requisição
         */
        $idServico = request('servico');
        $idProfissional = request('profissional');
        $idCliente = request('cliente');
        $data = request('data');
        $horario = request('horario');

        /**
         * Recupera o serviço, o profissional e o cliente
         */
        $servico = Servico::find($idServico);
        $profissional = Profissional::find($idProfissional);
        $cliente = Cliente::find($idCliente);

        $agendamento = new Agendamento;
        $agendamento->id_servico = $idServico;
        $agendamento->id_profissional = $idProfissional;
        $agendamento->id_cliente = $idCliente;
        $agendamento->titulo = '[' . $servico->nome . '] ' . $profissional->nome;
        $agendamento->inicio = date( 'Y-m-d H:i', strtotime( $data . ' ' . $horario ) );
        $agendamento->fim = date( 'Y-m-d H:i', strtotime("+" . $servico->tempo_execucao_em_minutos . " minutes", strtotime( $data . ' ' . $horario )) );
        $agendamento->save();

        return redirect()->route('agenda.calendario')->with('success', 'Agendamento criado com sucesso');
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
        //
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
