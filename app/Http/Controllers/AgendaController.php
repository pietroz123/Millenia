<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Profissional;
use App\Agendamento;

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
        $agendamentos = Agendamento::all();
        $ag = array();

        foreach ($agendamentos as $agendamento) {
            array_push($ag, [
                'title' => $agendamento->titulo,
                'start' => $agendamento->inicio,
                'end' => $agendamento->fim,
            ]);
        }

        return view('dashboard.agenda.calendario', [
            'agendamentos' => $ag,
        ]);
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
