<?php

class ContaComum{

    protected int $numConta;
    protected String $dataAbertura;
    protected String $dataEncerramento;
    protected String $situacao;
    protected String $senha;
    protected double $saldo;


    function consultarConta(int $numConta){
        echo ("Saldo da conta ".$this->numConta." : ".$this->saldo);
    }

    function validarSenha($senha){
        if ($senha == $this->senha){
            echo "Senha correta!"
        }
    }

    function consultarSaldo(int $numConta){
        echo ("Saldo da conta ".$this->numConta." : ".$this->saldo);
    }

    




}



?>