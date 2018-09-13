<?php 
require_once 'config.php';
require_once ABSPATH.'/classes/class_User.php';
require_once ABSPATH.'/classes/class_Log.php';

if (! defined('ABSPATH')) exit();
// Inicial o Cache
ob_start();
// Inicia a sessão
session_start();

if (! empty($_SESSION['CryptoSync'])) {
	header('Location: pagina.php');
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<?=HOME_URL?>views/_css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=HOME_URL?>views/_css/font-awesome.css">
	<link rel="stylesheet" href="<?=HOME_URL?>views/_css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=HOME_URL?>views/_css/blue.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<b><img src=""></b>
		</div>
		<div class="login-box-body">
			<?php
			// Verifica se existe POST
			if (isset($_POST['sendlogin'])) {
				// Recebe as variavei passadas pelo POST e adiciona em um array
				$f['login'] = $_POST['login'];
				$f['senha'] = $_POST['password'];
				// Verifica se a senha é menor que 8
				if (strlen($f['senha']) < 8 ) {
					echo "
					<div class=\"alert alert-warning\">
					<ul>
					<li>A senha deve ter no mínimo 8 Caracter!.</li>
					</ul>
					</div>";
				}else{
					// Cria o objeto User e Log
					$user = new User();
					$log = new Log();
					// // Se for encontrado o email no banco verifica se login e senha está correto
					if($v = $user->select($f['login'])){
						// Verifica se a Conta está ativa
						if($v['ativo']!= 0){
							// Verifica se login encotrado no banco e senha é igual ao Digitado
							if ($v['usuario'] == $f['login'] && $v['senha'] == $f['senha']) {
								// Armazena os dados na sessão
								$_SESSION['CryptoSync'] = $v;
								// Redireciona para o mesmo local - verifica no inicio do codigo
								header('Location: '.$_SERVER['PHP_SELF']);
							}else{
								// Cria o objeto Log e grava o id e usuario
								$log->setId($v['id']);
								$log->setUsuario($v['usuario']);
								$log->insert();
								// Busca total de tentativa de acesso
								$erro = $log->select($v['id']);
								echo "
								<div class=\"alert alert-warning\">
								<ul>
								<li>Tentativa de acesso ".$erro['iduser']." </li>
								<li>Após 3 Tentativa a conta será bloqueada </li>
								</ul>
								</div>";
								
								// Se tentativa for mair que e igual a 4 bloqueia conta
								if ($erro['iduser'] >= 4) {
									$log->block($v['id'],0);
									echo "
									<div class=\"alert alert-warning\">
									<ul>
									<li>Conta foi Bloqueada</li>
									<li>Aguarde 30 minuto e tente de Novo</li>
									</ul>
									</div>";
								}
							}
						}else{
							echo "
							<div class=\"alert alert-danger\">
							<ul>
							<li>Conta está Bloqueada ...</li>
							</ul>
							</div>";
							// Atualiza o log eliminando todos logs a mais de 30 minuto no banco
							$log->update($v['id']);
							// retorna o numero de tentativas
							if ($log->select($v['id']) < 4) {
								$log->block($v['id'],1);
							}
						}
					}
					echo "
					<div class=\"alert alert-danger\">
					<ul>
					<li>usuario ou senha incorreto</li>
					</ul>
					</div>";
				}
			}
			?>
			<p class="login-box-msg">Entre com login de acesso</p>
			<form action="" method="post">
				<div class="form-group has-feedback">
					<input type="text" name="login" class="form-control" placeholder="Login" value="<?=(@$f['login']) ? $f['login'] :null?>" >
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="Password" value="<?=(@$f['senha']) ? $f['senha'] :null?>" >
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="sendlogin">Login</button>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</body>
<?php
// Limpa o cache 
ob_end_flush(); ?>
</html>