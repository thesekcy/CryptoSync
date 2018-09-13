<?php
// Carrega as configurações padão
require_once '../../config.php';
// Verifica se a Constante exist se não sai
if (! defined('ABSPATH')) exit;
?>
<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=HOME_URL?>views/_css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=HOME_URL?>views/_css/erro_style.css">

  <!-- Icon Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Titulo -->
  <title>ERRO 404</title>
</head>
<body class="erro-background">
  <div class="container"> 
    <div class="erro text-center">
      <img src="<?=HOME_URL?>views/_img/erro.png" class="img-erro">
      <!-- <p><strong>Ocorreu um erro durante a navegação</strong></p> -->
      <p class="tituloErro"><strong>PÁGINA NÃO ENCONTRADA</strong></p>
      <p>O problema foi enviado para a nossa equipe de desenvolvedores.<br>Pedimos desculpas pelo problema e iremos resolver o mais rápido possivel.</p>
      <div class="container col-2"> 
        <a class="nav-link btn btn-outline-primary btnInicial text-center" href="<?=HOME_URL?>">Pagina Inicial</a>
      </div>
    </div>
  </div>
</body>
</html>