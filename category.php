<?php 

class Categoria
{
    private $nome;


    public function __construct($nome)
    {

        $this->setNome($nome);
    }



    public function getNome()
    {

        return $this->nome;
    }
    public function setNome($nome)
    {

        $this->nome = $nome;
    }
}


