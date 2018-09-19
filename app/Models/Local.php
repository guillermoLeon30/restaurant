<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Local extends Model
{
  protected $table = 'local';
  protected $primaryKey = 'id_local';
  protected $fillable = ['nombre', 'direccion', 'id_ciudad', 'id_provincia', 'id_pais'];
  public $timestamps = false;

  //---------------------------------RELACIONES------------------------------
  public function user(){
    return $this->belongsTo('App\User', 'users_id', 'id');
  }

  public function ciudad(){
    return $this->belongsTo('App\Models\Categoria', 'id_ciudad', 'id_categoria');
  }

  public function provincia(){
    return $this->belongsTo('App\Models\Categoria', 'id_provincia', 'id_categoria');
  }

  public function pais(){
    return $this->belongsTo('App\Models\Categoria', 'id_pais', 'id_categoria');
  }

  //----------------------------------METODOS-------------------------
  public static function guardar($local){
    $local = new Local($local->all());
    $local->users_id = auth()->user()->id;
    $local->id_estado = 1;
    $local->token = '123456879';

    $local->save();

    return $local;
  }
}
