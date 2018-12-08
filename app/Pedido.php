<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'idPedido';
    public $timestamps = false;

    public function Cliente()
    {
        return $this->belongsTo('App\Cliente')->withDefault();
    }
}
