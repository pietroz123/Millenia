<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comanda;
use App\Cliente;

class ListaComandas extends Component
{
    public $abertas;
    public $comandas;
    public $query;

    public function updatedQuery()
    {
        $this->comandas = Comanda::whereIn('id_cliente',
        
            // IDs de clientes com o trecho do nome
            Cliente::where('nome', 'like', '%' . $this->query . '%')->pluck('id')->toArray()

        )->where('aberta', $this->abertas)
            ->get()
            ->toArray();
    }

    public function mount()
    {
        $this->query = '';
        $this->abertas = true;
        $this->comandas = Comanda::all()->where('aberta', true)->toArray();
    }

    public function updatedAbertas()
    {
        $this->comandas = Comanda::where('aberta', $this->abertas)
            ->get()
            ->toArray();
    }


    public function render()
    {
        return view('livewire.lista-comandas');
    }
}
