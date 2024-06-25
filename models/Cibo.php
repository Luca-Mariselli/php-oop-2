<?php
class Cibo extends Prodotto{
    public $tipologia;
    public $porzione;

    public function getClasse(){
        return __CLASS__;
    }
    
}