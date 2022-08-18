<?php

    class Pessoaw{

        var $Codigo;
        var $nome;
        var $altura;
        var $idadae;
        var $nascimentos;
        var $escolaridade;
        var $salario;

        //aumenta a altura em centimetros
        function crescer($centimetros){

            if ($centimetros > 0) {
                $this->altura += $centimetros
            }
        }

        //altera a escolaridade para  titulaçã
        function formar($titulacao){
            $this->escolaridade = $titulacao;
        }

        //aumenta a idade em anos
        function envelhecer($anos){
            if ($anos > 0) {

                $this-> $idade += $anos;
            }
                        
        }

    }

    


?>