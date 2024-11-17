<?php

class Base{
    protected string $nome;
    protected int $pontos; 

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPontos(): int
    {
        return $this->pontos;
    }

    public function setPontos(int $pontos): self
    {
        $this->pontos = $pontos;

        return $this;
    }
}