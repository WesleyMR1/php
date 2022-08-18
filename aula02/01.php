<?php 

    include_once 'contas.php';

    $conta1 = new Contas;

    $conta1->numAge = 5028;
    $conta1->numConta = 123456;
    $conta1->nome = 'kayque';
    $conta1->saldo = '587985468';

    $conta1->ImprimeEtiqueta();






?>