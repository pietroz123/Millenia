<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Servico;
use App\Profissional;
use App\Pacote;
use App\Agendamento;
use DateTime;
use Carbon\Carbon;
use App\Traits\WhatsappTrait;

class AjaxController extends Controller
{
    use WhatsappTrait;

    // =======================================================
    // MODALS
    // =======================================================

    /**
     * Recupera o modal com as informações do cliente
     */
    public function modalInformacoesCliente()
    {
        $cliente = Cliente::find(request('id'));
        
        return view('dashboard.cadastros.clientes.modal-cliente', [
            'cliente' => $cliente,
        ]);
    }

    /**
     * Recupera o modal com as informações do profissional
     */
    public function modalInformacoesProfissional()
    {
        $profissional = Profissional::find(request('id'));
        
        return view('dashboard.cadastros.profissionais.modal-profissional', [
            'profissional' => $profissional,
        ]);
    }

    /**
     * Recupera o modal com as informações do servico
     */
    public function modalInformacoesServico()
    {
        $servico = Servico::find(request('id'));
        
        return view('dashboard.cadastros.servicos.modal-servico', [
            'servico' => $servico,
        ]);
    }

        /**
     * Recupera o modal com as informações do pacote
     */
    public function modalInformacoesPacote()
    {
        $pacote = Pacote::find(request('id'));
        
        return view('dashboard.cadastros.pacotes.modal-pacote', [
            'pacote' => $pacote,
        ]);
    }

    // =======================================================
    // NOVO AGENDAMENTO
    // =======================================================

    public function profissionaisDeUmServico()
    {
        $idServico = request('id');
        $profissionais = Servico::find($idServico)->profissionais;
        return response()->json($profissionais);
    }

    public function servicosDeUmProfissional()
    {
        $idProfissional = request('id');
        $servicos = Profissional::find($idProfissional)->servicos;
        return $servicos;
    }

    /**
     * Recupera os horários disponíveis de um profissional
     */
    public function horariosDisponiveisDeUmProfissional()
    {
        $idProfissional = request('id');
        
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
         * Recupera o inicio dessa semana
         */
        function primeiroDiaSemana($week, $year) {
            $dto = new DateTime();
            $dto->setISODate($year, $week);
            return $dto;
        }

        // Lista de horários das 10:00 às 18:00
        $horariosSemana = get_hours_range(36000, 64800, 900, 'g:i a', true);
        $limite = DateTime::createFromFormat('H:i', '18:00');

        // Lista de agendamentos
        $agendamentos = Agendamento::where('id_profissional', $idProfissional)->get();

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
                    $horariosDisponiveis[$dia][$hAtual] = true;
                }
            }
        }

        // Dias da semana
        $segunda = primeiroDiaSemana(date('W'), date('Y'));

        return view('dashboard.agenda.tabela-horarios-disponiveis', [
            'horariosDisponiveis' => $horariosDisponiveis,
            'segunda' => $segunda,
        ]);
    }

    /**
     * Realizar um agendamento
     */
    public function realizarAgendamento()
    {
        $idServico = request('id-servico');
        $idProfissional = request('id-profissional');
        $idCliente = request('id-cliente');
        $horario = request('horario');
        $data = request('dia');

        /**
         * Recupera o serviço, o profissional e o cliente
         */
        $servico = Servico::find($idServico);
        $profissional = Profissional::find($idProfissional);
        $cliente = Cliente::find($idCliente);

        $agendamento = new Agendamento;
        $agendamento->id_servico = $idServico;
        $agendamento->id_profissional = $idProfissional;
        $agendamento->id_cliente = $idCliente;
        $agendamento->titulo = '[' . $servico->nome . '] ' . $profissional->nome;
        $agendamento->inicio = DateTime::createFromFormat('d/m/Y H:i', $data . ' ' . $horario )->format('Y-m-d H:i');
        $agendamento->fim = date( 'Y-m-d H:i', strtotime("+" . $servico->tempo_execucao_em_minutos . " minutes", strtotime( $agendamento->inicio )) );
        $agendamento->save();

        /**
         * Envia uma notificação por whatsapp
         */
        $this->enviarWhatsappAgendamento($agendamento);
    }


    // =======================================================
    // CALENDÁRIO
    // =======================================================

    public function modalAgendamento()
    {
        $data = request('data');
        $horario = request('horario');
        $servicos = Servico::all();

        return view('dashboard.agenda.modal-agendamento', [
            'data' => $data,
            'horario' => $horario,
            'servicos' => $servicos,
        ]);
    }
}
