<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comanda;

class ListaComandas extends Component
{
    public $abertas;
    public $comandas;

    public function mount()
    {
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
