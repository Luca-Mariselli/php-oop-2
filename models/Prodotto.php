<?php
include __DIR__ . "/models/Categoria.php";

class Prodotto{
    public $cibo;
    public $cuccia;
    public $categoria
    public $prezzo

    public function __construct(Categoria $categoria, Cibo $cibo, Cuccia $cuccia, $prezzo){
        $this->categoria = $categoria;
        $this->cibo = $cibo;
        $this->cuccia = $cuccia;
        $this->prezzo = $prezzo;
    }
}