<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;


class empleadoController extends Controller
{
  public function index(){
    $empleados = Empleado::orderBy('nombre','asc')->paginate(10);
    return view('empleado.empleado')->with('empleado', $empleados);
  }

      public function crear(Request $request){
        $empleado = New Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->cedula = $request->cedula;
        $empleado->save();
        return redirect()->route('empleado');
      }

      public function editar(Request $request, $id){

        $empleado = Empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->cedula = $request->cedula;
        $empleado->save();
        return redirect()->route('empleado');
      }

      public function borrar($id){
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleado');
      }
}
