<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Libro;
use App\Tipo;

class libroController extends Controller
{
    public function index(){
        $libros = Libro::orderBy('nombre','asc')->paginate(10);
        $tipos = Tipo::all();
        return view('libro.libro')->with('libro', $libros)->with('tipos',$tipos);
    }


    public function crear(Request $request){

      $libro = New Libro();
      $libro->nombre = $request->nombreLibro;
      $libro->editorial = $request->editorial;
      $libro->año = $request->año;
      $libro->ubicacion = $request->ubicacion;
      $libro->autor = $request->autor;
      $libro->area_conocimiento = $request->AreaConocimiento;
      $libro->diasP = $request->diasP;
      $libro->id_tipo = $request->Tipo;
      $libro->save();

      return redirect()->route('libro');
    }

    public function editar(Request $request, $id){

      $libro = Libro::find($id);
      $libro->nombre = $request->nombre;
      $libro->editorial = $request->editorial;
      $libro->año = $request->Año;
      $libro->ubicacion = $request->ubicacion;
      $libro->autor = $request->autor;
      $libro->area_conocimiento = $request->AreaConocimiento;
      $libro->diasP = $request->diasP;
      $libro->id_tipo = $request->Tipo;
      $libro->save();

      return redirect()->route('libro');
    }

    public function borrar($id){
      $libro = Libro::find($id);
      $libro->delete();

      return redirect()->route('libro');
    }
}
