<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Profissional;

class AgendaController extends Controller
{
    /**
     * Retorna as opções da agenda
     */
    public function index()
    {
        return view('dashboard.agenda.index');
    }

    /**
     * Retorna o calendário com agendamentos
     */
    public function calendario()
    {
        return view('dashboard.agenda.calendario');
    }

    /**
     * Retorna a página de criação de agendamento
     */
    public function novoAgendamento()
    {
        return view('dashboard.agenda.novo-agendamento', [
            'servicos' => Servico::all(),
        ]);
    }
}
