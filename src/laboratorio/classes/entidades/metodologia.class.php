<?php

class metodologia {

    private $titulo;
    private $descricao;
    private $anexo;

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getAnexo() {
        return $this->anexo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setAnexo($anexo) {
        $this->anexo = $anexo;
    }

}
