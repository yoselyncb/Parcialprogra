<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba',function(){
	return view('prueba',array('nombre' => 'Eibrajam'));
});

Route::get('/dashboard',function(){
  return view('dashboard');
  Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

  // ------------------------Rutas de estudiante------------------------\\
  
  Route::get('estudiante',[
    'uses'  =>  'estudianteController@index',
    'as'    =>  'estudiante'
  ]);
  // Ruta para crear usuarios
  Route::post('estudianteCrear',[
    'uses'  =>  'estudianteController@crear',
    'as'    =>  'estudianteCrear'
  ]);
  // Ruta par editar los usuarios
  Route::put('estudianteEditar/{id}',[
    'uses'  =>  'estudianteController@editar',
    'as'    =>  'estudianteEditar'
  ]);
  // Ruta para eliminar los usarios
  Route::get('estudianteEliminar/{id}',[
    'uses'  =>  'estudianteController@borrar',
    'as'    =>  'estudianteBorrar'
  ]);
});
  // ------------------------Rutas de empleado------------------------\\
  
  Route::get('empleado',[
    'uses'  =>  'empleadoController@index',
    'as'    =>  'empleado'
  ]);
  // Ruta para crear usuarios
  Route::post('empleadoCrear',[
    'uses'  =>  'empleadoController@crear',
    'as'    =>  'empleadoCrear'
  ]);
  // Ruta par editar los usuarios
  Route::put('empleadoEditar/{id}',[
    'uses'  =>  'empleadoController@editar',
    'as'    =>  'empleadoEditar'
  ]);
  // Ruta para eliminar los usarios
  Route::get('empleadoEliminar/{id}',[
    'uses'  =>  'empleadoController@borrar',
    'as'    =>  'empleadoBorrar'
  ]);

  // ------------------------Rutas de libro------------------------\\
  Route::get('libro',[
    'uses'  =>  'libroController@index',
    'as'    =>  'libro'
  ]);
  // Ruta para crear usuarios
  Route::post('libroCrear',[
    'uses'  =>  'libroController@crear',
    'as'    =>  'libroCrear'
  ]);
  // Ruta par editar los usuarios
  Route::put('libroEditar/{id}',[
    'uses'  =>  'libroController@editar',
    'as'    =>  'libroEditar'
  ]);
  // Ruta para eliminar los usarios
  Route::get('libroEliminar/{id}',[
    'uses'  =>  'libroController@borrar',
    'as'    =>  'libroBorrar'
  ]);
    // ------------------------Rutas de Prestamo------------------------\\
    Route::get('prestamo',[
      'uses'  =>  'prestamoController@index',
      'as'    =>  'prestamo'
    ]);
    // Ruta para crear prestamos
    Route::post('prestamoCrear',[
      'uses'  =>  'prestamoController@crear',
      'as'    =>  'prestamoCrear'
    ]);
    // Ruta par editar los prestamos
    Route::put('prestamoEditar/{id}',[
      'uses'  =>  'prestamoController@editar',
      'as'    =>  'prestamoEditar'
    ]);
    // Ruta para eliminar los prestamos
    Route::get('prestamoEliminar/{id}',[
      'uses'  =>  'prestamoController@borrar',
      'as'    =>  'prestamoBorrar'
    ]);
