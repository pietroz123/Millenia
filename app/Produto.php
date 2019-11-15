<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Relacionamentos
    public function marca() {
        return $this->belongsTo('App\Marca', 'id_marca', 'id');
    }
}
