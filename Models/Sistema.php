<?php

    class Sistema {
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;
        // private static $suoneria;

        function __construct ($mittente, $destinatario, $oggetto, $contenuto, $suoneria){
            $this -> mittente = $mittente;
            $this -> destinatario = $destinatario;
            $this -> oggetto = $oggetto;
            $this -> contenuto = $contenuto;
            $this -> mittente = $mittente;
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

        // public function getSuoneria(){
        //     return $this->suoneria;
        // }
    }

?>