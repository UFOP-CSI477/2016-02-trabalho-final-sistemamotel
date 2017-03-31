<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
  protected $table = 'apartamentos';
  protected $fillable = ['ocupado','descricao','valor'];
}
