<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
