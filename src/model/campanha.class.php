<?php

class Campanha {

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
return $this;
}

public function getDescricao()
{
return $this->descricao;
}

public function setDescricao($descricao)
{
$this->descricao = $descricao;
return $this;
}

 
public function getObjetivo()
{
return $this->objetivo;
}

public function setObjetivo($objetivo)
{
$this->objetivo = $objetivo;
return $this;
}


public function getRegras()
{
return $this->regras;
}

public function setRegras($regras)
{
$this->regras = $regras;
return $this;
}

public function getPremios()
{
return $this->premios;
}


public function setPremios($premios)
{
$this->premios = $premios;
return $this;
}


public function getFoto_camp()
{
return $this->foto_camp;
}


public function setFoto_camp($foto_camp)
{
$this->foto_camp = $foto_camp;
return $this;
}

}

              