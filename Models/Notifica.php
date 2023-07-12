<?php

    class Notifica extends Sistema{
        private $visibile;
        public static $notifica = 'verde';

        function __construct($mittente, $destinatario, $oggetto, $contenuto, Bool $visibile){
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
            $this -> visibile = $visibile;
        }
        
        public function getVisibile(){
            return $this->visibile;
        }

        public function Invio(){
            return 'Notifica push inviata';
        }

        public function OnClick(){
            return "Apro l'applicazione collegata";
        }
    }

?>