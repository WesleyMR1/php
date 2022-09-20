<?php

    include_once 'Fornecedor.php';
    include_once 'Produtos.php';

    //instancia Fornecedor
    $fornecedor = new Fornecedor();

    $fornecedor->codigo = 848;
    $fornecedor->razaoSocial = ' Bom Gosto Alimento S.A'; 
    $fornecedor->endereco = ' Rua Ipi ranga';
    $fornecedor->cidade = ' Poço de Caldas';

    //instancia de produtos
    $produtos = new Produtos();

    $produtos-> codigo = 462;
    $produtos-> descricao = 'Doce de Pêssego';
    $produtos-> fornecedor = $fornecedor;

    //imprime atributos
    echo 'Código: '. $produtos->codigo. '<br>';
    echo 'Descrição: '. $produtos->descricao. '<br>';
    echo 'Código: '. $produtos->fornecedor->codigo. '<br>';
    echo 'Razão social: '. $produtos->fornecedor->codigo. '<br>';

    $produtos->codigo . "<br>";
    $produtos->descricao . "<br>";
    $produtos->fornecedor->codigo . "<br>";
    $produtos->fornecedor->razaoSocial . "<br>";
    
?>