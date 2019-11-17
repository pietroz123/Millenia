<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Cliente;


class ListaClientes extends Component
{
    public $query;
    public $clientes;

    public function mount()
    {
        $this->query = '';
        $this->clientes = Cliente::all()->toArray();
    }

    public function updatedQuery()
    {
        $this->clientes = Cliente::where('nome', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.lista-clientes');
    }
}
