<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Componentes;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route ::get('/', 'App\Http\Controllers\ControllerComponentes@index')->name('componentes.index');

Route ::post('crear', 'App\Http\Controllers\ControllerComponentes@create')->name('componentes.store');

Route::get('agregar', 'App\Http\Controllers\ControllerComponentes@vistaagregar')->name('componentes.agregar');

Route::delete('/{id}', 'App\Http\Controllers\ControllerComponentes@delete' )->name('componentes.destroy');

Route::get('/{id}/editar', 'App\Http\Controllers\ControllerComponentes@edit' )->name('componentes.edit');

Route::put('/{componentes}/editar', 'App\Http\Controllers\ControllerComponentes@update' )->name('componentes.update');