<?php
require_once("UsuarioSessao.php");

class UsuarioSessaoPermissao extends UsuarioSessao {

    public $permissao;

    public function __construct($nome, $login, $permissao){
        parent::__construct($login, $nome);
        $this->permissao = $permissao;
        echo "Nova permissao";
    }

    public function ler():string {
        echo "<p>ler</p>";
        return $this->permissao;   
    }
}