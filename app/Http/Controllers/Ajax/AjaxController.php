<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Servico;
use App\Profissional;

class AjaxController extends Controller
{
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
}
