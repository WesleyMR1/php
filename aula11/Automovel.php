<?php
    include_once 'Cambio.php';

    class Automovel{

        private Cambio $cambio;

        function __construct(){
            
        }
        
        function aumentarMarcha(){
            if ($marcha >= 1 && $marcha < 6) {
                $marcha++;
            }
        }



    }


?>