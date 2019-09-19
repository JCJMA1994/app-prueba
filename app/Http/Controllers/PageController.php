<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
  public function inicio(){

      return view ('welcome');
  }
  public function prueba(){
      return view('prueba');
  }
  public function blogs(){
      return view('blog');
  }
  public function nosotros($nombre = null){
      $equipo = ['Jose','Carlos','Joao'];
      return view('nosotros',compact('equipo','nombre'));
  }

  public function notas(){
      $notas = App\Nota::all();
      return view('notas',compact('notas'));
  }

  public function detalle($id){
      $nota =App\Nota::findOrFail($id);
    return view('notas.detalle',compact('nota'));
  }

  public function crear(Request $request){
      #return $request->all();
      $request->validate(['nombre'=>'required',
      'descripción'=>'required']);
      $notaNumero = new App\Nota;
      $notaNumero->nombre = $request->nombre;
      $notaNumero->descripción = $request->descripción;
      $notaNumero ->save();

      return back()->with('mensaje','Nota agregada');

}
public function  editar($id){
    $nota =App\Nota::findOrFail($id);
      return view('notas.editar',compact('nota'));
}

public function actualizar(Request $request, $id){
      $notaUpdate = App\Nota::findOrFail($id);
    $notaUpdate-> nombre = $request->nombre;
    $notaUpdate-> descripción = $request->descripción;

    $notaUpdate-> save();

    return back()->with('mensaje','Nota Actualizada');
}
}
