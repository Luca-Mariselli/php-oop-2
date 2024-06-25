<?php
class Cuccia extends Prodotto{
    public $dimensione;
    public $colore;

    public function getClasse(){
        return __CLASS__;
    }
}