<?php
require_once("Pessoa.php");
require_once "Web.php";
class Funcioario extends Pessoa implements Web {
    private float $matricula;
    
    public function __construct(float $salario, string $nome, int $matricula){
        $this->salario = $salario;
        parent::__construct($nome, $salario);
    }

    function __destruct() {
        echo "<p>Destruindo o objeto {$this->nome}</p>";
    }
    
    public function getSalario():float {
        return $this->salario;
    }

    public function setSalario(float $salario):void {
        if($salario >=1000) {
            $this->salario = $salario;
        }
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula(float $matricula):void {
        $this->matricula = $matricula;
    }

    public function setNome(string $nome):void {
        $this->nome = $nome;
    }

    public function getNome():string {
        return $this->nome;
    }

    function imprime(){
        echo "<p>Nome {$this->nome}</p>";
        echo "<p>Salário {$this->salario}</p>";
        echo "<p>Matricula {$this->matricula}</p>";
    }

    function __get($nome){
        if($nome == "identidade"){
            return $this->matricula;
        }
    }
    
    function __set($nome, $valor){
        if($nome == "identidade"){
            $this->matricula = $valor;
        }
    }

    function __call($nome, $parametros){
        if($nome == "setIdentidade"){
            foreach($parametros as $parametro){
                $this->setMatricula($parametro);
            }
            return;
        }
        echo "Foi chamado $nome com os parâmetros $parametros";
        print_r($parametros);
        die();
    }
}