<?php

require 'classes/produtos.php';
require 'models/produtos.php';

use models\produtos as modelsProdutc;
use classes\produtos as classesProdutc;

    $produto = new classesProdutc();
    $produto -> mostrarDetalhes();

    echo "<br>";

    $produto1 = new modelsProdutc();
    $produto1 -> mostrarDetalhes();


