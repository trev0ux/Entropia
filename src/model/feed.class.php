<?php


class Feed {
    private $publicacao;
    private $comentarios;
    private $curtidas;

 
    function getPublicacao() {
        return $this->publicacao;
    }
    function setPublicacao($publicacao) {
        $this->publicacao = $publicacao;
    }

    function getComentarios() {
        return $this->comentarios;
    }
    function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }

    function getCurtidas() {
        return $this->curtidas;
    }
    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
}