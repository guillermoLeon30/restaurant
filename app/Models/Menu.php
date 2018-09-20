<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;
use Illuminate\Support\Facades\Storage;

class Menu extends Model
{
  protected $table = 'menu';
  protected $primaryKey = 'id_menu';
  protected $fillable = ['nombre', 'imagen'];
  public $timestamps = false;

  //---------------------------------RELACIONES------------------------------
  public function user(){
    return $this->belongsTo('App\User', 'users_id', 'id');
  }

  public function items(){
    return $this->hasMany('App\Models\Item', 'id_menu');
  }

  //------------------------------METODOS-------------------------
  public static function guardar($request){
    $file = $request->file('imagen');
    $path = $file->hashName('menu');
    $url = asset('/storage/'.$path);

    $image = Image::make($file);
    $image->resize(500, null, function ($c){
      $c->aspectRatio();
      $c->upsize();
    });
    
    Storage::disk('public')->put($path, (string) $image->encode());

    $menu = new Menu($request->all());
    $menu->imagen = $url;
    $menu->id_estado = 1;
    $menu->users_id = auth()->user()->id;
    $menu->save();

    return $menu;
  }
}
