<?php

class Premios{

    private $nome;
    private $pontos;
    private $premioFoto;


    public function getNome()
    {
        return $this->nome;
    }

 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPontos()
    {
        return $this->pontos;
    }

 
    public function setPontos($pontos)
    {
        $this->pontos = $pontos;

        return $this;
    }

 
    public function getPremioFoto()
    {
        return $this->premioFoto;
    }


    public function setPremioFoto($premioFoto)
    {
        $this->premioFoto = $premioFoto;

        return $this;
    }
}