<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Profissional;

class ListaProfissionais extends Component
{
    public $query;
    public $profissionais;

    public function mount()
    {
        $this->query = '';
        $this->profissionais = Profissional::all()->toArray();
    }

    public function updatedQuery()
    {
        $this->profissionais = Profissional::where('nome', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.lista-profissionais');
    }
}
