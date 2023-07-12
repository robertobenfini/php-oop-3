<?php

    class Mail extends Sistema{
        private $allegato;
        public static $notifica = 'giallo';

        function __construct($mittente, $destinatario, $oggetto, $contenuto, Allegato $allegato){
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
            $this -> allegato = $allegato;
        }
        
        public static function getNotifica(){
            return $this::notifica;
        }

        public function Invio(){
            return 'Mail inviata';
        }
    }

    class Allegato{
        public $formato;
        public $tipo;

        function __construct($formato, $tipo){
            $this -> formato = $formato;
            $this -> tipo = $tipo;
        }

        public function getAllegato(){
            return $this->allegato;
        }
    }

    $allegato1 = new Allegato('PDF', 'testo');
    $allegato2 = new Allegato('png', 'immagine');
    $allegato3 = new Allegato('zip', 'cartella compressa');

?>