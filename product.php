<?php

trait ShippingCost {

    private $shipping;

    public function getShipping() {

        return $this -> shipping;
    }
    public function setShipping($shipping) {

        if ($shipping <= 0) {

            throw new Exception("Shipping can't be negative");
        }

        $this -> shipping = $shipping;
    }
}


class Product
{
    private $immagine;
    private $titolo;
    private $descrizione;
    private $prezzo;

    private Categoria $categoria;

    use ShippingCost;

    public function __construct($immagine, $titolo, $descrizione, $prezzo, Categoria $categoria, $shipping)
    {



        $this->setImmagine($immagine);
        $this->setTitolo($titolo);
        $this->setDescrizione($descrizione);
        $this->setPrezzo($prezzo);
        $this->setCategoria($categoria);
        $this->setShipping($shipping);

    }



    public function getImmagine()
    {

        return $this->immagine;
    }
    public function setImmagine($immagine)
    {

        $this->immagine = $immagine;
    }


    public function getTitolo()
    {

        return $this->titolo;
    }
    public function setTitolo($titolo)
    {

        $this->titolo = $titolo;
    }


    public function getDescrizione()
    {

        return $this->descrizione;
    }
    public function setDescrizione($descrizione)
    {

        $this->descrizione = $descrizione;
    }


    public function getPrezzo()
    {

        return $this->prezzo;
    }
    public function setPrezzo($prezzo)
    {

        $this->prezzo = $prezzo;
    }



    public function getCategoria()
    {

        return $this->categoria;
    }
    public function setCategoria($categoria)
    {

        $this->categoria = $categoria;
    }
}

