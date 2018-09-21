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

  public function menus(){
    return $this->belongsToMany('App\Models\Menu', 'local_menu', 'id_local', 'id_menu')
                ->withPivot('id_estado');
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

  public static function agregarMenu($datos){
    $local = Local::findOrFail($datos->id_local);
    
    $local->menus()->attach($datos->id_menu, [
      'id_estado' =>  1
    ]);

    return $local;
  }

  public static function cambiarEstadoMenu($local, $menu){
    $registro = DB::table('local_menu')->where('id_local', $local->id_local)
                                       ->where('id_menu', $menu->id_menu);
    
    $id_estado = $registro->get()->first()->id_estado;
    
    if ($id_estado == 1) {
      $registro->update(['id_estado' => 2]);
    } else {
      $registro->update(['id_estado' => 1]);
    }

    return $local;
  }
}
