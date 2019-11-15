<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    /**
     * Relacionamentos
     */
    public function profissionais() {
        return $this->belongsToMany('App\Profissional', 'profissional_servico', 'id_servico', 'id_profissional');
    }
}
