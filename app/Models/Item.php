<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;
use Illuminate\Support\Facades\Storage;

class Item extends Model
{
  protected $table = 'item';
  protected $primaryKey = 'id_item';
  protected $fillable = ['id_menu', 'nombre', 'precio', 'imagen'];
  public $timestamps = false;

  //-----------------------------RELACIONES-------------------------  

  public function menu(){
    return $this->belongsTo('App\Models\Menu', 'id_menu');
  }

  //------------------------------METODOS-------------------------
  public static function guardar($request){
    $file = $request->file('imagen');
    $path = $file->hashName('items');
    $url = asset('/storage/'.$path);

    $image = Image::make($file);
    $image->resize(500, null, function ($c){
      $c->aspectRatio();
      $c->upsize();
    });
    
    Storage::disk('public')->put($path, (string) $image->encode());

    $item = new Item($request->all());
    $item->imagen = $url;
    $item->id_estado = 1;
    $item->save();

    return $item;
  }
}
