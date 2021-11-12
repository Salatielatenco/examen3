<?php

use App\Http\Controllers\PersonasControl;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PersonasControl::class, 'index'])->name('personas.index');

Route::get('personas/ingresar', [PersonasControl::class, 'ingresar'])->name('personas.ingresar');

Route::post('personas', [PersonasControl::class, 'store'])->name('personas.store');

Route::patch('edit/{persona}', [PersonasControl::class, 'update'])->name('personas.update');

Route::get('index/{persona}', [PersonasControl::class, 'edit'])->name('personas.edit');

Route::delete('index/{persona}', [PersonasControl::class, 'eliminar'])->name('personas.eliminar');