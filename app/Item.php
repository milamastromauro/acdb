<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'idItem';
    public $timestamps = false;

    public function Pedido()
    {
        return $this->belongsTo('App\Pedido')->withDefault();
    }
}
