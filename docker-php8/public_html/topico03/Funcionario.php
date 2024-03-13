<?php
require_once("Pessoa.php");

class Funcioario extends Pessoa {
    private float $salario;
    
    public function __construct(float $salario, string $nome){
        $this->salario = $salario;
        parent::__construct($nome, $salario);
    }
    
    public function getSalario():float {
        return $this->salario;
    }

    public function setSalario(float $salario):void {
        if($salario >=1000) {
            $this->salario = $salario;
        }
    }
}