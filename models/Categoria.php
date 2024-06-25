<?php

class Categoria{
    public $nome;
    public $icona;

    public function __construct($nomeCategoria, $percorsoImmagine){
        $this->nome = $nomeCategoria;
        $this->icona = $percorsoImmagine;
    }

    public function getCategoria(){
        return "$this->nomeCategoria";
    }
}