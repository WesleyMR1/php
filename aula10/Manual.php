<?php

    class Manual{

        bool $embreagem;
        $acelerar;

        function __construct($embreagem){

            $this->embreagem = $embreagem;
        }

        function set_embreagem( bool $par){
            $this->embreagem = $par;
        }

        function get_embreagem(){
            return $this->embreagem;
        }

        function pisarNaEmbreagem(){
            
        }

        function soltarAEmbreagem(){
            
        }

    }

?>