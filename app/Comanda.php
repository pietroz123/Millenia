<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    // Relacionamentos
    public function servicos() {
        return $this->belongsToMany('App\Servico', 'comanda_servico', 'id_comanda', 'id_servico');
    }
    public function cliente() {
        return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
    }
}
