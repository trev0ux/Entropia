<?php

class sugestao {
   
    private $assunto;
    private $mensagem;
    private $setor;
   
    function getAssunto() {
        return $this->assunto;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getSetor() {
        return $this->setor;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }


}
