<?php

class invoice {
    private float $preco;
    public int $quantidade;
    public string $informacao;
    public int $if;

    function __construct($preco, $quantidade, $informacao, $if){
        $this->preco = $preco;
        $this->quantidade= $quantidade;
        $this->informacao = $informacao;
        $this->if= $if;
    }
   

    public function __set($preco, $valor){
        $this->$preco = $valor;
        // $this->$informacao = $informacao;
        // $this->$if = $fatorado;
        // $this->quantidade = $quantidade;
      }
    public function __get($preco){
        return $this->$preco;
    }  

    // public function __get($informacao){
    //     return $this->$informacao;
    // }

    // public function __get($if){
    //     return $this->$if;
    // }

    // public function __get($quantidade){
    //     return $this->$quantidade;
    // }
}

?>