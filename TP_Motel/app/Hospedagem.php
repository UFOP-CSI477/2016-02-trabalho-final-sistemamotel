<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedagem extends Model
{
  protected $table = 'hospedagens';
  protected $fillable = ['users_id','apartamentos_id','produtos_id','total'];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function apartamento() {
    return $this->belongsTo('App\Apartamento');
  }

  public function produto() {
    return $this->belongsTo('App\Produto');
  }

}
