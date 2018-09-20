<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Local;
use App\Models\Menu;

class localController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $locales = auth()->user()->listaLocales()->paginate(5);
    
    $ciudades = DB::table('categoria')->where('tipo', 'Ciudad')
                                      ->where('estado', 1)
                                      ->get();

    $provincias = DB::table('categoria')->where('tipo', 'Provincia')
                                        ->where('estado', 1)
                                        ->get();

    $paises = DB::table('categoria')->where('tipo', 'Pais')
                                    ->where('estado', 1)
                                    ->get();

    return view('user.locales.index.index', [
      'ciudades'    =>  $ciudades,
      'provincias'  =>  $provincias,
      'paises'      =>  $paises,
      'locales'     =>  $locales
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    $local = Local::guardar($request);

    return response()->json(view('user.locales.index.include.tabla',[
      'locales' =>  $local->user->listaLocales()->paginate(5)
    ])->render());
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

  public function menusLocal(Local $local){
    return view('user.localMenus.index.index', [
      'local'       =>  $local,
      'menusLocal'  =>  $local->menus()->paginate(5),
      'menus'       =>  auth()->user()->menus
    ]);
  }

  public function agregarMenu(Request $datos){
    try {
      $local = Local::agregarMenu($datos);

      return response()->json(view('user.localMenus.index.include.tLocalMenus', [
        'menusLocal'  =>  $local->menus()->paginate(5)
      ])->render());
    } catch (\Exception $e) {
      dd($e);
    }
  }
}
