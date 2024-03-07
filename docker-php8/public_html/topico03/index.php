<?php
require_once("UsuarioSessao.php");
$usu1 = new UsuarioSessao("jose", "Jose da Silva");
$usu1->salvar();
$usu1->ler();
