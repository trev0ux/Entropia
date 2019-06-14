<?php


class Validacao{

  private $ID;
  private $avaliacao;
  private $respons_Tec;
  private $status;
  private $validar;


 
  public function getID()
  {
    return $this->ID;
  }

  public function setID($ID)
  {
    $this->ID = $ID;

    return $this;
  }

 
  public function getAvaliacao()
  {
    return $this->avaliacao;
  }

 
  public function setAvaliacao($avaliacao)
  {
    $this->avaliacao = $avaliacao;

    return $this;
  }

 
  public function getRespons_Tec()
  {
    return $this->respons_Tec;
  }

 
  public function setRespons_Tec($respons_Tec)
  {
    $this->respons_Tec = $respons_Tec;

    return $this;
  }

 
  public function getStatus()
  {
    return $this->status;
  }

 
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }


  public function getValidar()
  {
    return $this->validar;
  }


  public function setValidar($validar)
  {
    $this->validar = $validar;

    return $this;
  }
} 