<?php require_once 'config.php';
 session_start();
  if(isset($_SESSION['logado']) &&  $_SESSION['logado'] == 'SIM'):
    header("Location: ".HOME_URL."/SyncAdm/");
  endif;
  $modulo = $_GET['pag'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <!-- Descrição e informações basicas.
  ================================================== -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="IE=9" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CryptoSync - Site Oficial!</title>
  <meta name="description" content="Plataforma web voltada a segurança utilizando uma tecnologia descentralizada. O Blockchain.">
  <meta name="keywords" content="Blockchain, Ethereum, Smart Contracts, Contratos inteligentes, Segurança, Facilidade, Plataforma descentralizada.">
  <meta name="robots" content="index, follow">
  <meta name="author" content="CryptoSync">
  <link rel="icon" href="<?=HOME_URL?>/_img/buffer.svg">

  <!-- Icones
  ================================================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Bootstrap | CSS
  ================================================== -->

  <link rel="stylesheet" href="<?=HOME_URL?>/_css/bootstrap.css">
  <link rel="stylesheet" href="<?=HOME_URL?>/_css/style.css">
  <link rel="stylesheet" href="<?=HOME_URL?>/_css/fullpage.min.css">
  <link rel="stylesheet" href="<?=HOME_URL?>/_css/particles.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- JQuery | Validate
  ================================================== -->
  <script src="<?=HOME_URL?>/_js/jquery.js"></script>
  <script src="<?=HOME_URL?>/SyncAdm/views/_js/jquery.validate.min.js"></script>

</head>
  <body>

    <?php

    include_once(ABSPATH.'/includes/organisms/header-user.php');
    include_once(ABSPATH.'/includes/organisms/page-user-nologin.php');

      /*//Features
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
      include_once(ABSPATH.'/includes/organisms/footer.php');*/
    ?>

    <!-- Arquivos JS
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?=HOME_URL?>/_js/popper.min.js"></script>                                 <!--  JS usado no SASS -->
    <script src="<?=HOME_URL?>/_js/bootstrap.min.js"></script>                              <!--  JS usado no SASS -->
    <script src="<?=HOME_URL?>/_js/particles.js/particles.js"></script>                 <!--  JS usado no particles.js -->
    <script src="<?=HOME_URL?>/_js/particles.js/app.js"></script>                       <!--  JS usado no particles.js -->
    <script src="<?=HOME_URL?>/_js/scrpççpverfçpw.min.js"></script>
    <script src="<?=HOME_URL?>/_js/easings.min.js"></script>
    <script src="<?=HOME_URL?>/_js/fullpage.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>                     <!--  JS usado nas animações -->
    <script> AOS.init();</script>                                                       <!--  JS usado nas animações -->

    <script type="text/javascript"> onkeyup=""                                          //    JS usado no particles.js
      particlesJS.load('particles-js', '<?=HOME_URL?>/_js/particles.js/particles.json', function() {});
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#fullpage').fullpage();
      });
    </script>


  </body>
</html>
