<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedagemxproduto extends Model
{
  protected $table = 'hospedagemxprodutos';
  protected $fillable = ['id_hospedagem','id_produto','quantidade'];
}
