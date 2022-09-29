<?php

require 'produtos.php';

class Itens{
    $QtdeItem;
    $ValUnidade;
    Produtos $itensPedido;

    function __construct(Produtos $itensPedido, $QtdeItem, $ValUnidade){
        $this->itensPedido = $itensPedido;
        $this->QtdeItem = $QtdeItem;
        $this->itensPedido = $itensPedido;
    }
    

}