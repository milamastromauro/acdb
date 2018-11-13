<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'idFoto';
    public $timestamps = false;

    public function Produto()
    {
        return $this->belongsTo('App\Produto')->withDefault();
    }
}
