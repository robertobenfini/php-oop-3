<?php

    class Mail extends Sistema{
        private $allegato;
        private $notifica;

        function __construct($mittente, $destinatario, $oggetto, $contenuto, $suoneria, $allegato, $notifica){
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto, $suoneria);
            $this -> allegato = $allegato;
            $this -> notifica = $notifica;
        }   
    }

?>