<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    /**
     * Relacionamentos
     */
    public function cidade() {
        return $this->belongsTo('App\Cidade', 'id_cidade', 'id');
    }
    public function profissao() {
        return $this->belongsTo('App\Profissao', 'id_profissao', 'id');
    }
}
