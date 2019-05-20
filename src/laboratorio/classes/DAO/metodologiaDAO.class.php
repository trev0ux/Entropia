<?php

class metodologiaDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function inserir($parametro) {
        $sql = "INSERT INTO metodologia (titulo_metodo, desc_metodo, anexo_metodo) VALUES('" . $parametro->getTitulo() ."','". $parametro->getDescricao() ."','". $parametro->getAnexo() ."')";
        
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

}

