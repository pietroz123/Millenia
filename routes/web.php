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

// Serviços
Route::resource('servicos', 'ServicoController');

// Produtos
Route::resource('produtos', 'ProdutoController');


/**
 * ROTAS DA AGENDA
 */
Route::prefix('agenda')->group(function() {

    Route::get('/agenda', 'AgendaController@index')->name('agenda.index');
    Route::get('/agenda/calendario', 'AgendaController@calendario')->name('agenda.calendario');
    Route::get('/agenda/novo-agendamento', 'AgendaController@novoAgendamento')->name('agenda.novoAgendamento');

});

/**
 * ROTAS DE AJAX
 */
Route::namespace('Ajax')->prefix('ajax')->group(function() {

    // Clientes
    Route::post('/modalInformacoesCliente', 'AjaxController@modalInformacoesCliente');

    // Profissionais
    Route::post('/modalInformacoesProfissional', 'AjaxController@modalInformacoesProfissional');

    // Serviços
    Route::post('/modalInformacoesServico', 'AjaxController@modalInformacoesServico');
    
    // Agenda
    Route::post('/profissionaisDeUmServico', 'AjaxController@profissionaisDeUmServico');

});