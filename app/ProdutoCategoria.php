<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCategoria extends Model
{
    protected $table = 'produtocategoria';
    protected $primaryKey = 'idprodutocategoria';
    public $timestamps = false;

    public function Categoria()
    {
        return $this->belongsTo('App\Categoria')->withDefault();
    }

    public function Produto()
    {
        return $this->belongsTo('App\Produto')->withDefault();
    }
}
