<?php

class Giochi extends Product{
    private $materiale;
    private $colore


    public function __construct(
        $immagine,
        $titolo,
        $descrizione,
        $prezzo,
        Categoria $categoria,
        $materiale,
        $colore
    ) {

        parent::__construct(
            $immagine,
            $titolo,
            $descrizione,
            $prezzo,
            $categoria
        );

        $this->setMateriale($materiale);
        $this->setColore($colore);
    }
}