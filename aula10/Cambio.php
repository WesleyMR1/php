<?php

class Cambio{
    $marcha;

    public function __construct($marcha){

        $this->marcha = $marcha;

    }

    public function get_marcha(){
        return $this->marcha;
    }

    public function set_marcha($par){
    
        $this->marcha = $par;
    }

}   
?>