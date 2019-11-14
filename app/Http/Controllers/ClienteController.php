<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Profissao;
use App\Cidade;
use App\Estado;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cadastros.clientes.index', [
            'clientes' => Cliente::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cadastros.clientes.create', [
            'cliente' => new Cliente,
            'profissoes' => Profissao::all(),
            'cidades' => Cidade::all()->sortBy('nome'),
            'estados' => Estado::all()->sortBy('nome'),
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
         * Cria um novo cliente
         */
        $cliente = new Cliente;
        $cliente->nome = request('nome');
        $cliente->telefone_celular = request('tel-celular');
        $cliente->telefone_residencial = request('tel-residencial');
        $cliente->deseja_notificacao = request('deseja-notificacao') == "on" ? true : false;
        $cliente->email = request('email');
        $cliente->id_profissao = request('profissao');
        // $cliente->indicacao = request('indicacao');
        $cliente->id_cidade = request('cidade');
        $cliente->cep = request('cep');
        $cliente->bairro = request('bairro');
        $cliente->rua = request('rua');
        $cliente->numero_rua = request('numero-rua');
        $cliente->complemento_rua = request('complemento');

        // Salva
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente inserido com sucesso');
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
        return view('dashboard.cadastros.clientes.edit', [
            'cliente' => Cliente::find($id),
            'profissoes' => Profissao::all(),
            'cidades' => Cidade::all()->sortBy('nome'),
            'estados' => Estado::all()->sortBy('nome'),
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
         * Atualiza o cliente
         */
        $cliente = Cliente::find($id);
        $cliente->nome = request('nome');
        $cliente->telefone_celular = request('tel-celular');
        $cliente->telefone_residencial = request('tel-residencial');
        $cliente->deseja_notificacao = request('deseja-notificacao') == "on" ? true : false;
        $cliente->email = request('email');
        $cliente->id_profissao = request('profissao');
        // $cliente->indicacao = request('indicacao');
        $cliente->id_cidade = request('cidade');
        $cliente->id_estado = request('estado');
        $cliente->cep = request('cep');
        $cliente->bairro = request('bairro');
        $cliente->rua = request('rua');
        $cliente->numero_rua = request('numero-rua');
        $cliente->complemento_rua = request('complemento');

        // Salva
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso');
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
