<?php
class Pessoa {
    protected float $Salario;
    protected string $Nome;
    public function __construct($nome, $salario){
        $this->Nome = $nome;
        $this->Salario = $salario;
    }
}