<?php


class Feed {
    private $publicacao;
    private $comentarios;
    private $curtidas;

 
    public function getPublicacao()
    {
        return $this->publicacao;
    }

 
    public function setPublicacao($publicacao)
    {
        $this->publicacao = $publicacao;

        return $this;
    }

 
    public function getComentarios()
    {
        return $this->comentarios;
    }

    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }
}