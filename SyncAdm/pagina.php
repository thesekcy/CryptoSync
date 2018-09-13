<?php
// Carrega as configurações padão
require_once 'config.php';
// Verifica se a Constante exist se não sai
if (! defined('ABSPATH')) exit();

$modulo = $_GET['pag'];

include_once (ABSPATH.'/views/_includes/head_include.php');
include_once (ABSPATH.'/views/_includes/header_include.php');
include_once (ABSPATH.'/views/_includes/sidebar_include.php');
// Verifica se o GET pagina esta vazio se sim inclui a pagina principal do sistema
if($modulo != ""){
	// Verifica se existe o arquivo com nome se sim Inclui no carregamento
	if(file_exists('views/_page/'.$modulo.".php")){
		include ABSPATH.'/views/_page/'.$modulo.".php"; 
	}else{
		// Se não existe Redireciona para pagina de erro
		//echo '<meta http-equiv="Refresh" content="0; url="'.HOME_URL.'/views/_erros/erro.php">';
		//echo '<script type="text/javascript">window.location.href="'.HOME_URL.'/views/_erros/erro.php";</script>';
		echo ABSPATH."/views/_page/".$modulo.".php";
	} 
}else{ 
	include_once (ABSPATH.'/views/_page/dashboard.php');
}
	include_once (ABSPATH.'/views/_includes/footer_include.php');