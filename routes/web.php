<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\GruposAlumnosController;
use App\Http\Controllers\GruposController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::name('alumnos')->get('/alumnos',[AlumnosController::class,'alumnos']);
Route::name('alumno_alta')->get('/alumno_alta',[AlumnosController::class,'alumno_alta']);
Route::name('alumno_registrar')->post('/alumno_registrar',[AlumnosController::class,'alumno_registrar']);

Route::name('alumno_detalle')->get('/alumno_detalle/{id}',[AlumnosController::class,'alumno_detalle']);
Route::name('alumno_editar')->get('/alumno_editar/{id}',[AlumnosController::class,'alumno_editar']);
Route::name('alumno_salvar')->put('/alumno_salvar/{id}',[AlumnosController::class,'alumno_salvar']);
Route::name('alumno_borrar')->get('/alumno_borrar/{id}',[AlumnosController::class,'alumno_borrar']);

Route::name('grupos')->get('/grupos',[GruposController::class,'grupos']);
//nombre de la ruta,nombre de la ruta,nombre del controlador,nombre de la funcion
Route::name('grupo_alta')->get('/grupo_alta',[GruposController::class,'grupo_alta']);
Route::name('grupo_registrar')->post('/grupo_registrar',[GruposController::class,'grupo_registrar']);
Route::name('grupo_detalle')->get('/grupo_detalle/{id}',[GruposController::class,'grupo_detalle']);
Route::name('grupo_editar')->get('/grupo_editar/{id}',[GruposController::class,'grupo_editar']);
Route::name('grupo_salvar')->put('/grupo_salvar/{id}',[GruposController::class,'grupo_salvar']);
Route::name('grupo_borrar')->get('/grupo_borrar/{id}',[GruposController::class,'grupo_borrar']);

