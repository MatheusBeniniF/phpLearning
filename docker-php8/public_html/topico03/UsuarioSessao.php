<?php
class UsuarioSessao
{
    public $login;
    public $nome;

    public function __construct($login, $nome){
        $this->login = $login;
        $this->nome = $nome;
        echo "<p>$this->login</p> <p>$this->nome</p>";
    }

    public function salvar(?string $nome){
        $this->nome = $nome;
        echo "<p>salvar</p>";
    }

    public function ler():string {
        echo "<p>ler</p>";
        return $this->nome;   
    }
}
