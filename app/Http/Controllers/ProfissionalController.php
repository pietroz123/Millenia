<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Cidade;
use App\Estado;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cadastros.profissionais.index', [
            'profissionais' => Profissional::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cadastros.profissionais.create', [
            'profissional' => new Profissional,
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
         * Cria novo profissional
         */
        $profissional = new Profissional;
        $profissional->nome = request('nome');
        $profissional->cpf = request('cpf');
        $profissional->rg = request('rg');
        $profissional->telefone_celular = request('tel-celular');
        $profissional->telefone_residencial = request('tel-residencial');
        $profissional->email = request('email');
        // $profissional-> = request('area-atuacao');
        // $profissional-> = request('servicos');
        $profissional->cor_agenda = request('cor-agenda');
        $profissional->cep = request('cep');
        $profissional->id_cidade = request('cidade');
        $profissional->bairro = request('bairro');
        $profissional->rua = request('rua');
        $profissional->numero_rua = request('numero-rua');
        $profissional->complemento_rua = request('complemento');
        $profissional->horario_entrada = request('horario-entrada');
        $profissional->horario_saida = request('horario-saida');
        $profissional->save();

        return redirect()->route('profissionais.index')->with('success', 'Profissional cadastrado com sucesso');
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
        /**
         * Remove o profissional
         */
        $profissional = Profissional::find($id);
        $profissional->delete();

        return redirect()->route('profissionais.index')->with('success', 'Profissional removido com sucesso');
    }
}
