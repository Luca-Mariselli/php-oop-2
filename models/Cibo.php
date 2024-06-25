<?php
class Cibo extends Prodotto{
    public $tipologia;
    public $porzione;

    public function __construct($tipologia, $porzione){
        $this->tipologia = $tipologia;
        $this->porzione = $porzione;
    }
}