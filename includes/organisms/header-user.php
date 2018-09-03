<!-- Icon Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="bgHeader col-12">
  <div class="container col-10">


    <!-- Primeira NavBar -->
    <nav class="navbar navbar-expand-lg navHeaderTop">
      <a class="navbar-brand" href="#">
        <!-- Logo -->
        <img src="../../img/blockchain.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b class="txtLogo">CryptoSYNC</b>
      </a>

      <!-- NavBar alinhada a direita ml-auto ml > Left | mr > right (procurando o centro)-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <!-- Botão de Login com Dropdown -->
          <a class="nav-link btn btn-outline-primary btnLogin" data-toggle="dropdown" id="navDrop" href="">Login</a>

          <!-- Dropdown formulario de login -->
          <div class="dropdown-menu">
            <form class="px-4 py-3">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="********">
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
          <a class="nav-link btn btn-primary ml-2 btnCadastrar" data-toggle="dropdown" id="navDrop" href="">Cadastre-se</a>
        </li>
      </ul>
    </nav>

    <!-- NavBar Menu com toggler expand -->
    <!-- Em telas menores os itens da lista ficam dentro de um botão -->
    <nav class="navbar navbar-expand-lg navbar-dark navMenu">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbarSite">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">PRODUTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">PREÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">CLIENTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">SUPORTE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">SORBE NÓS</a>
          </li>
        </ul>
      </div>
    </nav>

    <!--texto e imagens -->
    <?php include_once('../molecules/header-imgs-user.php'); ?>
    

</div>
</div>

