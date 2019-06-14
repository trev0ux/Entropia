<?php

class sistemaPremios {
    private $pontos;
    private $medalhas;


    public function getPontos()
    {
        return $this->pontos;
    }

    public function setPontos($pontos)
    {
        $this->pontos = $pontos;

        return $this;
    }

    public function getMedalhas()
    {
        return $this->medalhas;
    }

    public function setMedalhas($medalhas)
    {
        $this->medalhas = $medalhas;

        return $this;
    }
}