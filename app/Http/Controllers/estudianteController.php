<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;


class estudianteController extends Controller
{
    public function index(){
      $estudiantes = Estudiante::orderBy('nombre','asc')->paginate(10);
      return view('estudiante.estudiante')->with('estudiante', $estudiantes);
    }

      public function crear(Request $request){
        $estudiante = New Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->cedula = $request->cedula;
        $estudiante->carrera = $request->carrera;
        $estudiante->save();

        return redirect()->route('estudiante');
      }

      public function editar(Request $request, $id){

        $estudiante = Estudiante::find($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->cedula = $request->cedula;
        $estudiante->carrera = $request->carrera;
        $estudiante->save();

        return redirect()->route('estudiante');
      }

      public function borrar($id){
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect()->route('estudiante');
      }





}
