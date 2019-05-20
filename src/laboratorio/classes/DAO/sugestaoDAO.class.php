<?php

class ideiaDao {
    
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function inserir($parametro) {
        $query = "INSERT INTO ideia (titulo, descricao, beneficio, participante, anexo)
         VALUES('" . $parametro->getAssunto() ."','". $parametro->getMensagem() ."','" . $parametro->getSetor() ."')";
        
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

    

}
