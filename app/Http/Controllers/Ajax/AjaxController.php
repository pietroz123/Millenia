<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Servico;
use App\Profissional;

class AjaxController extends Controller
{
    // =======================================================
    // MODALS
    // =======================================================

    /**
     * Recupera o modal com as informações do cliente
     */
    public function modalInformacoesCliente()
    {
        $cliente = Cliente::find(request('id'));
        
        return view('dashboard.cadastros.clientes.modal-cliente')->with(compact(
            'cliente',
        ));
    }

    /**
     * Recupera o modal com as informações do profissional
     */
    public function modalInformacoesProfissional()
    {
        $profissional = Profissional::find(request('id'));
        
        return view('dashboard.cadastros.profissionais.modal-profissional')->with(compact(
            'profissional',
        ));
    }

    /**
     * Recupera o modal com as informações do servico
     */
    public function modalInformacoesServico()
    {
        $servico = Servico::find(request('id'));
        
        return view('dashboard.cadastros.servicos.modal-servico')->with(compact(
            'servico',
        ));
    }

    // =======================================================
    // NOVO AGENDAMENTO
    // =======================================================

    public function profissionaisDeUmServico()
    {
        $idServico = request('id');
        $profissionais = Servico::find($idServico)->profissionais;
        return response()->json($profissionais);
    }

    public function servicosDeUmProfissional()
    {
        $idProfissional = request('id');
        $servicos = Profissional::find($idProfissional)->servicos;
        return $servicos;
    }


    // =======================================================
    // CALENDÁRIO
    // =======================================================

    public function modalAgendamento()
    {
        $data = request('data');
        $horario = request('horario');
        $servicos = Servico::all();

        return view('dashboard.agenda.modal-agendamento')->with(compact(
            'data',
            'horario',
            'servicos',
        ));
    }
}
