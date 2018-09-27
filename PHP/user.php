<?php session_start();
require_once ABSPATH.'/classes/class_User.php';
// Verifica se a origem da requisição é do mesmo domínio da aplicação
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "http://localhost/CryptoSync/"):
	$retorno = array('codigo' => , 'mensagem' => 'Origem da requisição não autorizada!');
	echo json_encode($retorno);
	exit();
endif;
// Recebe os dados do formulário e verifica se existe se sim inclui o post se não inclui campo em branco
$senha = (isset($_POST['senha']))? $_POST['senha'] : '';
$email = (isset($_POST['email']))? $_POST['email'] : '';
$acao  = (isset($_POST['acao' ]))? $_POST['acao'] : '';

// Validações de preenchimento e-mail e senha se foi preenchido o e-mail
if (empty($email)):
	$retorno = array('codigo' => , 'mensagem' => 'Preencha seu e-mail!');
	echo json_encode($retorno);
	exit();
endif;
 
if (empty($senha)):
	$retorno = array('codigo' => , 'mensagem' => 'Preencha sua senha!');
	echo json_encode($retorno);
	exit();
endif;

// Verifica se o formato do e-mail é válido
if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
    $retorno = array('codigo' => , 'mensagem' => 'Formato de e-mail inválido!');
	echo json_encode($retorno);
	exit();
endif;

$user = new User();

// Válida os dados do usuário com o banco de dados
$retorno = $user->select($email);

// Válida a senha utlizando a API Password Hash
if(!empty($retorno) && password_verify($senha, $retorno->senha)):
	$_SESSION['id'] = $retorno->id;
	$_SESSION['nome'] = $retorno->nome;
	$_SESSION['email'] = $retorno->email;
	$_SESSION['tentativas'] = ;
	$_SESSION['logado'] = 'SIM';
else:
	$_SESSION['logado'] = 'NAO';
endif;

// Se logado envia código 1, senão retorna mensagem de erro para o login
if ($_SESSION['logado'] == 'SIM'):
	$retorno = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
	echo json_encode($retorno);
	exit();
else:
	$retorno = array('codigo' => '0', 'mensagem' => 'Usuario ou a senha estão incorretas');
	echo json_encode($retorno);
	exit();
endif;