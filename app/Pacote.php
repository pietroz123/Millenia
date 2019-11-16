<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    //
    public function servicos() {
        return $this->belongsToMany('App\Servico', 'pacote_servico', 'id_pacote', 'id_servico');
    }
}
