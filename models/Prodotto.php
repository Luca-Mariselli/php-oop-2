<?php

class Prodotto{
    public $nome;
    public $categoria;
    public $prezzo;

    public function __construct($nome, Categoria $categoria, $prezzo){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }
}