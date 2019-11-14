<?php

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

Route::get('/', function () {
    if (auth()->check())
        return redirect()->route('dashboard.index');

    return view('welcome');
});

/**
 * AUTHENTICATION ROUTES
 */
Auth::routes();

/**
 * PAGES ROUTES
 */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

/**
 * ROTAS DE CADASTRO
 */

// Clientes
Route::resource('clientes', 'ClienteController');

// Profissionais
Route::resource('profissionais', 'ProfissionalController');

/**
 * ROTAS DA AGENDA
 */
Route::get('/agenda', function() {
    return view('dashboard.agenda.index');
})->name('dashboard.agenda.index');