<?php 

   class Contas 
   {
       private $numAge;
       private $numConta;
       private $nome;
       private $saldo;

       public function __construct($numAge, $numConta, $nome, $saldo){
        $this->numAge = $numAge;
        $this->numConta = $numConta;
        $this->nome = $nome;
        $this->saldo = $saldo;
    }




       public function toString(){

            return printf("Agencia: %d Conta: %s <br> Nome: %s <br> Saldo: %.2f",$this->get_numAge(), $this->get_numConta(), $this->get_nome(), $this->get_saldo());

       }

       public function get_numAge(){
        return $this->numAge;
       }
       public function get_numConta(){
        return $this->numConta;
       }
       public function get_nome(){
        return $this->nome;
       }
       public function get_saldo(){
        return $this->saldo;
       }

   } 
?>