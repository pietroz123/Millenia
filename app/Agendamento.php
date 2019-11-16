<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agendamento extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * Relacionamentos
     */
    public function servico() {
        return $this->belongsTo('App\Servico', 'id_servico', 'id');   
    }
    public function profissional() {
        return $this->belongsTo('App\Profissional', 'id_profissional', 'id');   
    }
    public function cliente() {
        return $this->belongsTo('App\Cliente', 'id_cliente', 'id');   
    }
}