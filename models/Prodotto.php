<?php

class Prodotto{
    public $nome;
    public $categoria;
    public $prezzo;
    public $classe;

    public function __construct($nome, Categoria $categoria, $prezzo){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }

    public function getNome(){
        return "$this->nome";
    }

    public function getPrezzo(){
        return "$this->prezzo";
    }
    
    
}