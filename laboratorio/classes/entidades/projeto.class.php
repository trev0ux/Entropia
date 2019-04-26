<?php

class projeto {

    private $titulo;
    private $descricao;
    private $setor;
    private $anexo;

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getSetor() {
        return $this->setor;
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

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setAnexo($anexo) {
        $this->anexo = $anexo;
    }

}
