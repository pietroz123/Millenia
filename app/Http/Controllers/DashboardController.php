<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Profissional;
use App\Produto;
use App\Servico;
use App\Pacote;
use App\Agendamento;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $n_clientes = count(Cliente::all());
        $n_profissionais = count(Profissional::all());
        $n_produtos = count(Produto::all());
        $n_servicos = count(Servico::all());
        $n_pacotes = count(Pacote::all());
        $n_agendamentos = count(Agendamento::all());

        return view('dashboard.dashboard-index')->with(compact(
            'n_clientes',
            'n_profissionais',
            'n_produtos',
            'n_servicos',
            'n_pacotes',
            'n_agendamentos',
        ));
    }
}
