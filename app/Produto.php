<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'idProduto';
    public $timestamps = false;

    public function Fotos(){
        return $this->hasMany('App\Foto','Produto_idProduto','idProduto');
    }
}
