<?php
    include 'Cambio.php';
    include 'Automovel.php';

    class Manual extends Automovel{

        var bool $embreagem;
        var $acelerar = 0;
        var $velocidade = 15;

        function __construct(Cambio $cam){
            $this->cambio = $cam;
        }


        function pisarNaEmbreagem(){
            $this->embreagem = true;
        }

        function soltarAEmbreagem(){
            $this->embreagem = false;
        }

        function acelerar(int $km){
            if ($km > 0 && $this->embreagem) {
                echo "<br>O carro está ".$km."km/h mais rapido";
                $this->set_velocidade($km);
                echo "<br>Velocidade atual: ".$this->get_velocidade();
            }
        }

        function reduzir(int $km){
            if ($km > 0 && $km <= $this->get_velocidade() && $this->embreagem) {
                echo "<br>O carro está ".$km."km/h mais lento";
                $this->set_velocidade(-($km));
                echo "<br>Velocidade atual: ".$this->get_velocidade();
            }
        }


      
        function set_velocidade($par){
            $this->velocidade += $par;
        }

        function get_velocidade(){
            return $this->velocidade;
        }


    }
    $cam = new Cambio(1);

    $teste = new Manual($cam);
    $teste->pisarNaEmbreagem();
    $teste->acelerar(5);
    $teste->reduzir(2);

?>