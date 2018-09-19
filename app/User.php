<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use App\Models\Local;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'nombres', 'apellidos', 'telefono', 'id_tipo_documento', 'numero_documento', 'estado'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  //---------------------------------RELACIONES------------------------------
  public function locales(){
    return $this->hasMany('App\Models\Local', 'users_id');
  }

  public function menus(){
    return $this->hasMany('App\Models\Menu', 'users_id');
  }

  //---------------------------------METODOS------------------------------
  public function listaLocales(){
    return Local::with(['ciudad', 'provincia', 'pais'])
                ->where('users_id',$this->id);
  }

}
