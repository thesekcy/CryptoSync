<?php require_once 'config.php'; 
$modulo = $_GET['pag'];
?>
<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=HOME_URL?>/node_modules/bootstrap/compiler/bootstrap.css">
  <link rel="stylesheet" href="<?=HOME_URL?>/node_modules/bootstrap/compiler/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Icon Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- Titulo -->
  <title>Nome do Projeto</title>
</head>
<body>
  <?php
  //Features
  include_once(ABSPATH.'/includes/organisms/header-user.php'); 


// Verifica se o GET pagina esta vazio se sim inclui a pagina principal do sistema
  if($modulo != ""){
  // Verifica se existe o arquivo com nome se sim Inclui no carregamento
    if(file_exists(ABSPATH.'/includes/organisms/'.$modulo.'.php')){
      include ABSPATH.'/includes/organisms/'.$modulo.'.php'; 
    }else{
    // Se não existe Redireciona para pagina de erro
    echo '<meta http-equiv="Refresh" content="0; url="'.HOME_URL.'/includes/pages/erro.php">';
    echo '<script type="text/javascript">window.location.href="'.HOME_URL.'/includes/pages/erro.php";</script>';
    } 
  }else{ 
    include_once(ABSPATH.'/includes/organisms/features_page.php');
  }
  include_once(ABSPATH.'/includes/organisms/footer.php');
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?=HOME_URL?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="<?=HOME_URL?>/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="<?=HOME_URL?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> AOS.init();</script>
</body>
</html>