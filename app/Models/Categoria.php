<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';
	//protected $fillable = ['nombre', 'direccion', 'id_ciudad', 'id_provincia', 'id_pais'];
	public $timestamps = false;

}
