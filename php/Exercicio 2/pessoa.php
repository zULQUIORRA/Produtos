<?php

class Empregado{
    public $SM;
    public $_nome;
    public $_sobrenome;
    

    function __construct($_nome, $_sobrenome, $SM){
        $this->nome = $_nome;
        $this->sobrenome = $_sobrenome;
        $this->SM = $SM;
    }

    function get_nome(){
        return $this->nome;
    }  

    function get_sobrenome(){
        return $this->sobrenome;
    }
     
    function get_SM(){
        return $this->SM;
    }

}

?>