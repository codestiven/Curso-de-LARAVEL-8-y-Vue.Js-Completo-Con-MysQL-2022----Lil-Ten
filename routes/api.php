<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Empleado;



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

route::get('/empleados', function () {
    $empleados = Empleado::get();
    return $empleados;
});

//ruta para obtener un solo empleado
Route::get('/empleados/{id}', function ($id) {
    $empleados = Empleado::findOrFail($id);
    return $empleados;
});

//ruta para crear un nuevo empleado
route::post('/empleados' , function(Request $request){

    $request->validate([
        'nombre' => 'required|max:50',
        'apellidos' => 'required|max:50',
        'cedula' => 'required|max:10',
        'email' => 'required|max:50|email|unique:empleados',
        'lugar_nacimiento' => 'required |max:50',
        'genero' => 'required',
        'estado_civil' => 'required',
        'telefono' => 'required|numeric',
    ]);



    $empleados = new Empleado();
    $empleados -> nombre = $request -> input('nombre');
    $empleados -> apellidos = $request -> input('apellidos');
    $empleados -> cedula = $request -> input('cedula');
    $empleados -> email = $request -> input('email');
    $empleados -> lugar_nacimiento = $request -> input('lugar_nacimiento');
    $empleados -> genero = $request -> input('genero');
    $empleados -> estado_civil = $request -> input('estado_civil');
    $empleados -> telefono = $request -> input('telefono');
    $empleados -> save();
    return "empleado creado";
});

//ruta para actualizar un empleado
Route::put('/empleados/{id}', function (Request $request, $id) {

    $request->validate([
        'nombre' => 'required|max:50',
        'apellidos' => 'required|max:50',
        'cedula' => 'required|max:10',
        'email' => 'required|max:50|email|unique:empleados,email,' . $id,
        'lugar_nacimiento' => 'required |max:50',
        'genero' => 'required',
        'estado_civil' => 'required',
        'telefono' => 'required|numeric',
    ]);

    $empleados = Empleado::findOrFail($id);
    $empleados -> nombre = $request -> input('nombre');
    $empleados -> apellidos = $request -> input('apellidos');
    $empleados -> cedula = $request -> input('cedula');
    $empleados -> email = $request -> input('email');
    $empleados -> lugar_nacimiento = $request -> input('lugar_nacimiento');
    $empleados -> genero = $request -> input('genero');
    $empleados -> estado_civil = $request -> input('estado_civil');
    $empleados -> telefono = $request -> input('telefono');
    $empleados -> save();
    return "empledo actualizado";
});

//ruta para eliminar un empleado
Route::delete('/empleados/{id}', function ($id) {
    $empleados = Empleado::findOrFail($id);
    $empleados -> delete();
    return "empleado eliminado";
});