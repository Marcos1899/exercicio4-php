<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Gestores\Gestores;
use App\Http\Livewire\Admin\Gestores\GestoresForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicial');
});

Route::get('/gestores', Gestores::class);
Route::get('/gestores/criar', GestoresForm::class);
Route::get('/gestores/{gestor}/editar', GestoresForm::class);




