<?php

require_once('trabalho.php');

/*
class pessoa extends
{
    protected $salario;

    public function __construct()
    {
        $this->salario = 500;
    }

    public function calculaSalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }
}



class pessoa
{
    private $salario;

    public function __construct($ajuste = 400)
    {
        $this->salario = 500;

        echo $this->calculaSalario($ajuste); 
    }

    public function calculaSalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }
}


class pessoa
{
    private $salario;

    public function __construct()
    {
        $this->salario = 500;
    }

    public function calculaSalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }
}
*/

class pessoa extends trabalho
{
    private $salario;

    public function __construct()
    {
        $this->salario = 500;
    }

    public function calculaSalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function obterDados(string $nome)
    {
        $this->setNome($nome);

        return $this->padronizaNome();
    }
}
