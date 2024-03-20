<?php
class Departamento {
    private $funcionario;
    const IDENTIFICADOR = 789;
    static $quantidade = 0;

    public function __construct($funcionario){
        $this->funcionario = array();
    }

    public function addFuncionario(int $funcionario){
        $this->funcionario = $funcionario;
        self::$quantidede++;
    }

    public function getFuncionarios() {
        return $this->funcionario;
    }

    public function getFuncionario(int $index) {
        return $this->funcionarios[$index];
    }
}