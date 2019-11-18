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

// Pacotes
Route::resource('pacotes', 'PacoteController');

// Comandas
Route::resource('comandas', 'ComandaController');

/**
 * ROTAS DA AGENDA
 */
Route::prefix('agenda')->group(function() {

    Route::get('', 'AgendaController@index')->name('agenda.index');
    Route::get('/calendario', 'AgendaController@calendario')->name('agenda.calendario');
    Route::get('/novo-agendamento', 'AgendaController@novoAgendamento')->name('agenda.novoAgendamento');

});

/**
 * ROTAS DE AGENDAMENTO
 */
Route::resource('agendamentos', 'AgendamentoController');

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

    // Pacote
    Route::post('/modalInformacoesPacote', 'AjaxController@modalInformacoesPacote');
    
    // Agenda
    Route::post('/profissionaisDeUmServico', 'AjaxController@profissionaisDeUmServico');
    Route::post('/recuperarClientes', 'AjaxController@recuperarClientes');
    Route::post('/modalAgendamento', 'AjaxController@modalAgendamento');
    Route::post('/horariosDisponiveisDeUmProfissional', 'AjaxController@horariosDisponiveisDeUmProfissional');
    Route::post('/realizarAgendamento', 'AjaxController@realizarAgendamento');

});

use App\Agendamento;
use App\Profissional;
use Carbon\Carbon;

Route::get('/teste', function() {

    dd(DateTime::createFromFormat('d/m/Y H:i', '20/11/2019 10:30' )->format('Y-m-d H:i') );

    /**
     * Cria um vetor de horas (https://surniaulula.com/2016/lang/php/php-create-an-array-of-hours/)
     */
    function get_hours_range( $start = 0, $end = 86400, $step = 3600, $format = 'g:i a', $boolean = true ) {
        $times = array();
        for ( $i = 0; $i <= 6; $i++ ) { 
            foreach ( range( $start, $end, $step ) as $timestamp ) {
                $hour_mins = gmdate( 'H:i', $timestamp );
                $times[$i][$hour_mins] = $boolean;
            }
        }
        return $times;
    }

    /**
     * Recupera o inicio e fim da semana
     */
    function primeiroDiaSemana($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        return $dto;
        return $dto->format('Y-m-d');
        // $dto->modify('+6 days');
        // $ret['week_end'] = $dto->format('Y-m-d');
        // return $ret;
    }

    // Lista de horários das 10:00 às 18:00
    $horariosSemana = get_hours_range(36000, 64800, 900, 'g:i a', true);

    // dd($horariosSemana);
    $limite = DateTime::createFromFormat('H:i', '18:00');
    // dd($horariosSemana);

    echo "Profissional: " . Profissional::find(4)->nome . "<br><br><br>";

    // Lista de agendamentos
    $agendamentos = Agendamento::where('id_profissional', 4)->get();

    // Retorna apenas os agendamentos da semana atual
    $agendamentos = $agendamentos->filter(function($ag) {
        $inicio = new DateTime($ag->inicio);
        $semana = $inicio->format('W');
        $essaSemana = date('W');
        return $semana == $essaSemana; 
    });

    /**
     * Primeiro loop para marcar horários ocupados
     */
    foreach ($agendamentos as $ag) {
        
        $inicio = new DateTime($ag->inicio);    // DateTime de início do agendamento
        $fim = new DateTime($ag->fim);          // DateTime de fim do agendamento
        $dia = $inicio->format('N') - 1;        // Representação numérica do dia da semana (0: Segunda, 1: Terça,..., 5: Sábado, 6: Domingo)

        $atual = clone $inicio;
        while ($atual <= $fim) {
            $horario = $atual->format("H:i");
            $horariosSemana[$dia][$horario] = false;      // Marca o horário como ocupado
            $atual->modify("+15 minutes");          // Avança 15 minutos
        }

    }

    // dd($horariosSemana);

    $tempo_execucao = 90;
    $horariosDisponiveis = get_hours_range(36000, 64800, 900, 'g:i a', false);

    /**
     * Segundo loop para verificar disponibilidade
     */
    foreach ($horariosSemana as $dia => $horarios) {
        foreach ($horarios as $horario => $disponivel) {
            
            $atual = DateTime::createFromFormat('H:i', $horario);
            $hAtual = $atual->format('H:i');
            $fim = clone $atual;
            $fim->modify("+" . $tempo_execucao . " minutes");
            $hFim = $fim->format('H:i');

            /**
             * Verifica se o horário atual está disponível e o horário depois do tempo
             * de execução do serviço está disponível. Se sim, este é um horário disponível
             */
            if ($horariosSemana[$dia][$hAtual] == true AND $fim <= $limite AND $horariosSemana[$dia][$hFim] == true) {
                echo 'Dia '. $dia .': Horário ' . $hAtual . ' disponível', "<br>";
                $horariosDisponiveis[$dia][$hAtual] = true;
            }
        }
    }

    $segunda = primeiroDiaSemana(date('W'), date('Y'));
    dd($segunda);

    return view('teste', [
        'horariosDisponiveis' => $horariosDisponiveis,
    ]);

});