<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
  protected $table = 'endereco';
  protected $primaryKey = 'idEndereco';
  public $timestamps = false;
}
