<?php

    class Mail extends Sistema{
        private $allegato;
        public static $notifica = 'giallo';

        function __construct($mittente, $destinatario, $oggetto, $contenuto,){
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
        }
        
        public static function getNotifica(){
            return $this::notifica;
        }

        public function Invio(){
            return 'Mail inviata';
        }

        public function setAllegato($allegato){
            $this->allegato = $allegato;
        }

        public function getAllegato(){
            return $this->allegato;
        }
    }

    class Allegato{
        public $formato;
        public $tipo;

        function __construct($formato, $tipo){
            $this -> formato = $formato;
            $this -> tipo = $tipo;
        }
    }

    $allegato1 = new Allegato('PDF', 'testo');
    $allegato2 = new Allegato('png', 'immagine');
    $allegato3 = new Allegato('zip', 'cartella compressa');

?>