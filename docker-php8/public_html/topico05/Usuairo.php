<?php
class Aluno {
    private $id;
    private $nome;
    private $matricula;

    public function __construct($id = null, $nome = null, $matricula = null){ 
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
}