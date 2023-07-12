<?php

    class Sistema {
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;
        public static $suoneria = 'DRIIIN';

        function __construct ($mittente, $destinatario, $oggetto, $contenuto){
            $this -> mittente = $mittente;
            $this -> destinatario = $destinatario;
            $this -> oggetto = $oggetto;
            $this -> contenuto = $contenuto;
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }

        public function getOggetto(){
            return $this->oggetto;
        }

        public function getContenuto(){
            return $this->contenuto;
        }

        public static function getSuoneria(){
            return $this::suoneria;
        }

        public function Invio(){
           return 'Contenuto inviato';
        }
    }

?>