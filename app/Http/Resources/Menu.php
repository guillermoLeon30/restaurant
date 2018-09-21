<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Item as ItemResource;

class Menu extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request){
    return [
      'id'      =>  $this->id_menu,
      'nombre'  =>  $this->nombre,
      'imagen'  =>  $this->imagen,
      'items'   =>  $this->items->transform(function ($item, $key){
        return new ItemResource($item);
      })
    ];
  }
}
