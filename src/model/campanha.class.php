<?php

	class Campanha {
		private $tema;
		private $descricao;
		private $objetivo;
		private $regras;
		private $premios;
		private $imagem;



		function getTema() {
			return $this->tema;
		}
		function setTema($tema) {
			$this->tema = $tema;
		}

		function getDescricao() {
			return $this->descricao;
		}
		function setDescricao($descricao) {
			$this->descricao = $descricao;
		}

		function getObjetivo() {
			return $this->objetivo;
		}
		function setObjetivo($objetivo) {
			$this->objetivo = $objetivo;
		}

		function getRegras() {
			return $this->regras;
		}
		function setRegras($regras) {
			$this->regras = $regras;
		}

		function getPremios() {
			return $this->premios;
		}
		function setPremios($premios) {
			$this->premios = $premios;
		}

		function getImagem() {
		return $this->imagem;
		}
		function setImagem($imagem) {
			$this->imagem = $imagem;
		}

	}

private $tema;
private $descricao;
private $objetivo;
private $regras;
private $premios;
private $foto_camp;
        


public function getTema()
{
return $this->tema;
}

public function setTema($tema)
{
$this->tema = $tema;
}

public function getDescricao()
{
return $this->descricao;
}

public function setDescricao($descricao)
{
$this->descricao = $descricao;
}

 
public function getObjetivo()
{
return $this->objetivo;
}

public function setObjetivo($objetivo)
{
$this->objetivo = $objetivo;
}


public function getRegras()
{
return $this->regras;
}

public function setRegras($regras)
{
$this->regras = $regras;
}

public function getPremios()
{
return $this->premios;
}


public function setPremios($premios)
{
$this->premios = $premios;
}


public function getFoto_camp()
{
return $this->foto_camp;
}


public function setFoto_camp($foto_camp)
{
$this->foto_camp = $foto_camp;
}

function lançarCampanha (){
    include_once("../conexao/conexao.php");
			
    $sql = "INSERT INTO campanha(tema, descricao, objetivo, regra, premio, foto_camp) VALUES('$this->tema', '$this->descricao', '$this->objetivo', '$this->regra', '$this->premio', '$this->foto_camp')";
    
    if (mysqli_query($conn, $sql)) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}

}

              
