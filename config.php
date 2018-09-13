<?php
/******************************************/
/**   Configurações gerais do sistema    **/
/******************************************/
/**  Diretorios  ***/

//Caminho para a Raiz
define('ABSPATH', dirname(__FILE__));
//Caminho para a pasta de UPLOADS
define('UP_ABSPATH', ABSPATH.'/views/_uploads');
//Camainho para Pagina Inicial
define('HOME_URL', 'http://localhost/CryptoSync' );
// Definir para da UTF-8
header('Content-type: text/html; charset=utf-8');

//Evita que o usuário acesse este arquivo diretamente
//Debug Desenvolvimento
//define('DEBUG', true);
//Verifica o modo para DEBUGAR
if (! defined('DEBUG') || DEBUG === false) {
    //Esconde todos os erros
	error_reporting(0);
	ini_set("display_erros", 0);
}else{
    //Mostra todos os erros
	error_reporting(E_ALL);
	ini_set("display_erros", 1);
}