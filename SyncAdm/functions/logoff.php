<?php
// Carrega as configurações padão
require_once '../config.php';
// Verifica se a Constante exist se não sai
if (! defined('ABSPATH')) exit();
// Inicial o Cache
ob_start();
// Inicia a sessão
session_start('CryptoSync');
// elimina a sessão criada
session_destroy();
unset($_SESSION['nmNome']);
unset($_SESSION['endEmail']);
unset($_SESSION['password']);
unset($_SESSION['nvlAge']);

header('location: '.HOME_URL);
exit();
// Debug
//echo "<pre>";
//print_r($_SESSION['CryptoSync']);
//echo "</pre>";

// Limpa cache da sessão
ob_end_flush();