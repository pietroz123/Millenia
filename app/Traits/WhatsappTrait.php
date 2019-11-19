<?php

namespace App\Traits;

use Twilio\Rest\Client;
use App\Agendamento;
use App\Pacote;

trait WhatsappTrait
{
    /**
     * Envia um whatsapp com notificação de agendamento
     */
    public function enviarWhatsappAgendamento(Agendamento $ag)
    {
        $sid    = env('TWILIO_SID'); 
        $token  = env('TWILIO_TOKEN'); 
        $twilio = new Client($sid, $token); 

        /**
         * Mensagem
         */
        $mensagem = "Salão de Beleza Millenia\n\n";
        $mensagem .= "*Novo agendamento realizado*:\n";
        $mensagem .= $ag->servico->nome ." com ". $ag->profissional->nome;
        $mensagem .= "\n\n*Horário*:\n";
        $mensagem .= date( 'd/m/Y H:i', strtotime($ag->inicio) );

        /**
         * Envia o Whatsapp
         */
        $message = $twilio->messages 
                        ->create("whatsapp:+55 (15) 99713-6093", // to 
                                array( 
                                    "from" => "whatsapp:+14155238886",       
                                    "body" => $mensagem,
                                ) 
                        ); 
        
    }

    /**
     * Envia um whatsapp com notificação de pacote
     */
    public function enviarWhatsappPacote(Pacote $p)
    {
        $sid    = env('TWILIO_SID'); 
        $token  = env('TWILIO_TOKEN'); 
        $twilio = new Client($sid, $token); 

        /**
         * Mensagem
         */
        $mensagem = "Salão de Beleza Millenia\n\n";
        $mensagem .= "*Temos uma promoção nova! O pacote '". $p->nome ."' está com ". $p->desconto ."% de desconto e contém os seguintes serviços*:\n\n";

        $servicos = $p->servicos;

        foreach ($servicos as $servico) {
            $mensagem .= $servico->nome;
            if ($servico != $servicos->last())
                $mensagem .= " + ";
        }

        $mensagem .= " de R$" . $p->valor_sem_desconto . " por R$" . $p->valor_com_desconto;
        $mensagem .= "\n\n*Vem com a gente!*\n\n";

        if (!empty($p->descricao))
            $mensagem .= "*Obs*: " . $p->descricao;

        /**
         * Envia o Whatsapp
         */
        $message = $twilio->messages 
                        ->create("whatsapp:+55 (15) 99713-6093", // to 
                                array( 
                                    "from" => "whatsapp:+14155238886",       
                                    "body" => $mensagem,
                                ) 
                        ); 
        
    }

}