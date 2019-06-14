<?php

class Ouvidoria {

    private $assunto;
    private $setor;
    private $mensagem;

 
    public function getAssunto()
    {
        return $this->assunto;
    }


    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

  
    public function getSetor()
    {
        return $this->setor;
    }

  
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

 
    public function getMensagem()
    {
        return $this->mensagem;
    }


    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }
}