<?php

require_once '../classes/class_User.php';
$user = new User();

$nomeCompleto = $_POST['nomeC'];
$login        = $_POST['login'];
$email        = $_POST['email'];
$senha        = $_POST['senha'];
$acao         = $_POST['acao'];

if (isset($acao)) {
	if ($acao == "gravar") {
		$user->setNome($nomeCompleto);
		$user->setUsuario($login);
		$user->setSenha($senha);
		$user->setEmail($email);
		echo ($user->insert()) ? "Usuario Gravado com Sucerro!!" : "ERRO: Não foi possivel gravar.." ;
	}
}