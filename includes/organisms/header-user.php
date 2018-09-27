<?php session_start();
  if(isset($_SESSION['logado']) &&  $_SESSION['logado'] == 'SIM'):
    header("Location: home.php");
  endif;
?>
<!-- Icon Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="bgHeader col-12">
  <div class="container col-8">
    <!-- Primeira NavBar -->
    <nav class="navbar navbar-expand-lg navHeaderTop">
      <a class="navbar-brand" href="#">
        <!-- Logo -->
        <img src="<?=HOME_URL?>/img/logo.png" width="120px" class="img-fluid" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbarSite">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php?pag=features_page">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pag=features_index">COMO FUNCIONA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pag=partners">CLIENTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pag=preco">PREÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pag=suporte">SUPORTE</a>
          </li>
        </ul>
      </div>

      <!-- NavBar alinhada a direita ml-auto ml > Left | mr > right (procurando o centro)-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <!-- Botão de Login com Dropdown -->
          <a class="nav-link btn btn-outline-primary btnLogin" data-toggle="dropdown" id="navDrop" href="">Login <i class="fas fa-caret-down"></i></a>

          <!-- Dropdown formulario de login -->
          <div class="dropdown-menu">
            <p id="mensagem"></p>
            <form class="px-4 py-3" id="formUser">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email</label>
                <input type="email" class="form-control email" name="email" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" class="form-control password" name="password" id="exampleDropdownFormPassword1" placeholder="********">
              </div>
              <div class="form-check">
              </div>
              <button type="submit" class="btn btn-outline-primary btnlogin-dropdown">Entrar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="formLogin" href="#">Ainda não possui uma conta? Cadastre-se</a>
            <a class="dropdown-item" id="formLogin" href="#">Esqueceu a senha?</a>
          </div>
        </li>
        <!-- Botão de Cadastre-se -->
        <li class="nav-item">
          <a class="nav-link btn btn-primary ml-2 btnCadastrar submit"  data-toggle="dropdown" name="submit" id="navDrop" href="">Cadastre-se</a>
        </li>
      </ul>
    </nav>
    <!-- NavBar Menu com toggler expand -->
    <!-- Em telas menores os itens da lista ficam dentro de um botão -->
    <!--texto e imagens -->
    <?=(! isset($_GET['pag']) || $_GET['pag'] =='features_page')?include_once( ABSPATH.'/includes/molecules/headers/sub_header_principal.php'):null?>
  </div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
  $(document).ready(function () {
    $('#formUser').validate({
      // Definir as regras
      rules:{
        email:       {required: true, email: true},
        password:    {required: true, minlength: 8}
      },
      // Define as mensagens de erro para cada regra
      messages:{
        email:       { required: "Digite o seu e-mail", email: "Digite um e-mail valido" },
        password:    { required: "Digite o sua Senha", minlength: "O sua senha deve ter, no minimo, 8 caracteres" }
      },
      // Envia o formulario quando valido
      submitHandler: function(form) {
       // var data = $("#formUser").serialize();
        var email = $('.email').val();
        var senha = $('.password').val();
        var acao =  $('.submit').val();

        alert("Nome: "+email+" Semha: "+senha+" Ação: "+acao); 

        $.ajax({
          url:'<?=HOME_URL?>/php/user.php',
          type:'POST',
          //dataType: 'json',
          data:{
            acao:acao,
            email:email,
            senha:senha
          },
          beforeSend: function()
          {
              $("#mensagem").html('Validando ...');
          },
          success: function(data)
          {
            if(data.codigo == "1"){ 
              window.location.href = "home.php";
            }
            else{     
              $("#mensagem").html('<div class="alert alert-warning"><ul><li>' + data.mensagem + '</li></ul></div>');
            }
          },
          error: function(data)
          {
            $("#mensagem").html('<div class="alert alert-warning"><ul><li> Ocorreu um erro no sistema!.'+ data.mensagem +'</li></ul></div>');
          }
        });
      }

    });

  });
</script>
