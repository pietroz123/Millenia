<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Relacionamentos
    public function estado() {
        return $this->belongsTo('App\Estado', 'id_estado', 'id');
    }
}
