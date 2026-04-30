<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', function () { return view('nosotros');})-> name('nosotros');
Route::redirect('/servicios', '/servicios/pediatria')-> name('servicios');

Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos');

Route::view('/servicios/pediatria', 'servicios.detalle.pediatria')->name('servicios.pediatria');
Route::view('/servicios/ginecologia', 'servicios.detalle.ginecologia')->name('servicios.ginecologia');
Route::view('/servicios/endocrinologia', 'servicios.detalle.endocrinologia')->name('servicios.endocrinologia');
Route::view('/servicios/medicina-interna', 'servicios.detalle.medicinaInterna')->name('servicios.medicinaInterna');
Route::view('/servicios/neurologia', 'servicios.detalle.neurologia')->name('servicios.neurologia');
Route::view('/servicios/traumatologia', 'servicios.detalle.traumatologia')->name('servicios.traumatologia');
Route::view('/servicios/reumatologia', 'servicios.detalle.reumatologia')->name('servicios.reumatologia');
Route::view('/servicios/ecografias', 'servicios.detalle.ecografias')->name('servicios.ecografias');


Route::get('/contacto', function () { return view('contacto');})-> name('contacto');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'detalle'])->name('blog.detalle');
