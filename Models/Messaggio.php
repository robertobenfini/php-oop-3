<?php

class Messaggio extends Sistema{
    private $notifica_lettura;
    private $accettazione_risposta;
    public static $notifica = 'bianco';

    function __construct($mittente, $destinatario, $oggetto, $contenuto, Bool $notifica_lettura, Bool $accettazione_risposta){
        parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
        $this -> notifica_lettura = $notifica_lettura;
        $this -> accettazione_risposta = $accettazione_risposta;
    }
    
    public function getNotificaLettura(){
        return $this->notifica_lettura;
    }

    public function getAccettazioneRisposta(){
        return $this->accettazione_risposta;
    }

    public function Invio(){
        return 'Messaggio inviato';
    }

    public function risposta(){
        return "Grazie per avermi scritto";
    }
}

?>