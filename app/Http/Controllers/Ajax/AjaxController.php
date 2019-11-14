<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;

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
}
