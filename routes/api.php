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

route::post('/empleados' , function(Request $request){
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