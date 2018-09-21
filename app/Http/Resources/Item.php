<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Item extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request){
    return [
      'id'      =>  $this->id_item,
      'nombre'  =>  $this->nombre,
      'precio'  =>  $this->precio,
      'imagen'  =>  $this->imagen
    ];
  }
}
