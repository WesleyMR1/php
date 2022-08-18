<?php 

   class Contas 
   {
       var $numAge;
       var $numConta;
       var $nome;
       var $saldo;

       function ImprimeEtiqueta(){
            echo 'Número agencia: ' .$this->numAge . "<br/> \n";
            echo 'Número conta: ' .$this->numConta . "<br/> \n";
            echo 'Nome: ' .$this->nome . "<br/> \n";
            echo 'Saldo: ' .$this->saldo . "<br/> \n";

       }
   } 
?>