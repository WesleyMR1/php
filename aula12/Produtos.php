<?php

class Produtos{
    $DesPro;
    $QtdeProduto;
    $ValProduto;

    function __construct($a,$b,$c){
        $this->DesPro = $a;
        $this->QtdeProduto = $b;
        $this->ValProduto = $c; 
    }

    function getDesPro(){
        return this->DesPro;
    }

    function setDesPro($par){
        $this->QtdeProduto = $par;
    }

    function getQtdeProduto(){
        return this->QtdeProduto;
    }

    function setQtdeProduto($par){
        $this->DesPro = $par;
    }

    function getValProduto(){
        return this->ValProduto;
    }

    function setValProduto($par){
        $this->ValProduto = $par;
    }

}