<?php

class trabalho{
    private $nome;

    protected function setNome($nome)
    {
        $this->nome = $nome;
    }

    protected function getNome()
    {
        return $this->nome;
    }

    protected function padronizaNome()
    {
        return strtolower(str_replace(' ', '-', $this->getNome()));
    }
}