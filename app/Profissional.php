<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profissionais';

    /**
     * Relacionamentos
     */
    public function cidade() {
        return $this->belongsTo('App\Cidade', 'id_cidade', 'id');
    }
}
