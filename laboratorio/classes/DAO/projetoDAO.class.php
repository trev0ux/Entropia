<?php

class projetoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function inserir($parametro) {
        $sql = "INSERT INTO projeto (titulo_projeto, desc_projeto, setor, anexo_projeto) VALUES('" . $parametro->getTitulo() ."','". $parametro->getDescricao() ."','" . $parametro->getSetor() ."','" . $parametro->getAnexo() ."')";
        
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }
    
        public function consultar($parametro) {
        $sql = "SELECT * FROM projeto ";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado)) {
            return $resultado;
        } else {
            return false;
        }
    }

}
