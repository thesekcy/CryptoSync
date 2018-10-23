<?php require_once 'config.php';
$modulo = $_GET['pag'];
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CryptoSync - Site Oficial!</title>
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="\CryptoSync\node_modules\bootstrap\compiler\bootstrap.css">
  <link rel="stylesheet" href="\CryptoSync\node_modules\bootstrap\compiler\cadastro.css">
  <!-- Icon Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- Titulo -->
  <title>Nome do Projeto</title>
</head>
<body>
  <?php
  //Features
  include_once(ABSPATH.'/cadastro.php');
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?=HOME_URL?>/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="<?=HOME_URL?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>
