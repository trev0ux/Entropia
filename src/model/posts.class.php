<?php


class Posts {
    private $idPost;
    private $titulo;
    private $data;
    private $postagem;
    private $visitas;
    private $imagem;
    private $curtidas;


 
 
    public function getIdPost()
    {
        return $this->idPost;
    }


    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;

        return $this;
    }

 
    public function getTitulo()
    {
        return $this->titulo;
    }

  
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }


    public function getData()
    {
        return $this->data;
    }

  
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

 
    public function getPostagem()
    {
        return $this->postagem;
    }

 
    public function setPostagem($postagem)
    {
        $this->postagem = $postagem;

        return $this;
    }

  
    public function getVisitas()
    {
        return $this->visitas;
    }

 
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

  
    public function getImagem()
    {
        return $this->imagem;
    }

 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

 
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }
}