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
