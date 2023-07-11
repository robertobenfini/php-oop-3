<?php

    class Mail extends Sistema{
        private $allegato;
        public static $notifica = 'giallo';

        function __construct($mittente, $destinatario, $oggetto, $contenuto, Allegato $allegato){
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto,);
            $this -> allegato = $allegato;
        }
        
        public static function getNotifica(){
            return $this::notifica;
        }
    }

    class Allegato{
        private $formato;
        private $tipo;

        function __construct($formato, $tipo){
            $this -> formato = $formato;
            $this -> tipo = $tipo;
        }
    }

?>