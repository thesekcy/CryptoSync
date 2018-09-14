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
            <a class="nav-link" href="index?pag=features_page">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index?pag=features_index">COMO FUNCIONA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index?pag=partners">CLIENTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index?pag=preco">PREÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index?pag=suporte">SUPORTE</a>
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
    <!--texto e imagens -->
    <?=(! isset($_GET['pag']) || $_GET['pag'] =='features_page')?include_once( ABSPATH.'/includes/molecules/headers/sub_header_principal.php'):null?>
  </div>
</div>