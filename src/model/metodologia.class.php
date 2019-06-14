<?php


class Metodologia {

    private $titulo;
    private $definição;
    private $descricao;
    private $objetivo;
    private $anexo;


    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDefinição()
    {
        return $this->definição;
    }

    public function setDefinição($definição)
    {
        $this->definição = $definição;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }


    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }


    public function getObjetivo()
    {
        return $this->objetivo;
    }

 
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;

        return $this;
    }


    public function getAnexo()
    {
        return $this->anexo;
    }


    public function setAnexo($anexo)
    {
        $this->anexo = $anexo;

        return $this;
    }
} 