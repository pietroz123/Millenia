<?php

namespace App\Traits;

use Twilio\Rest\Client;
use App\Agendamento;

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

}