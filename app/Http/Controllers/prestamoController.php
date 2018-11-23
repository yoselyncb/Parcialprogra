<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Estudiante;
use App\Empleado;
use App\Libro;
use App\prestamoLibro;
use Illuminate\Support\Facades\Auth;

class prestamoController extends Controller
{
  public function index(){

    $prestamos = prestamoLibro::orderby('id','asc')->paginate(10);
    $estudiantes = Estudiante::orderby('Nombre','asc')->get();
    $libros = Libro::all();

    return view('prestamo.prestamo')
         ->with('libro', $libros)
         ->with('prestamo', $prestamos)
         ->with('estudiante', $estudiantes);
  }

  public function crear(Request $request){

    $prestamo = New prestamoLibro();
    $prestamo->fecha_prestamo = $request->fecha_prestamo;
    $prestamo->fecha_entrega = $request->fecha_entrega;
    $prestamo->id_estudiante = $request->id_estudiante;
    $prestamo->id_empleado = $request->id_empleado;
    $prestamo->Libros_id = $request->Libro;
    $prestamo->save();

    return redirect()->route('prestamo');
  }

  public function editar(Request $request, $id){

    $prestamo = prestamoLibro::find($id);
    $prestamo->fecha_prestamo = $request->fecha_prestamo;
    $prestamo->fecha_entrega = $request->fecha_entrega;
    $prestamo->id_estudiante = $request->id_estudiante;
    $prestamo->id_empleado = $request->id_empleado;
    $prestamo->Libros_id = $request->Libro;

    return redirect()->route('prestamo');
  }

  public function borrar($id){
    $prestamo = prestamoLibro::find($id);
    $prestamo->delete();

    return redirect()->route('prestamo');
  }
}
