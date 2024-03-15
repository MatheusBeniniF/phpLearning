<?php
class Departamento {
    private $funcionario;

    public function __construct(Funcionario $funcionario){
        $this->funcionario = $funcionario;
    }

    public function getFuncionario():Funcionario {
        return $this->funcionario;
    }

    public function addFuncionario(int $index){
        $this->funcionario = $funcionario;
    }

    public function getFuncionarios():Funcionario {
        return $this->funcionario;
    }

}