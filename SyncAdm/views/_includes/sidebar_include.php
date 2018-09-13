<aside class="main-sidebar">
  <section class="sidebar">
    <!-- painel do usuario -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=HOME_URL?>/views/_img/user.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Emanuel Barbosa Silva</p>
        <a href="<?=HOME_URL?>/functions/logoff.php"><i class="fa fa-circle text-success"></i>logoff</a>
      </div>
    </div>
    <!-- / painel do usuario -->
    <!-- sidebar menu:  -->
    <ul class="sidebar-menu">
      <li>
        <a href="pagina.php?pag=dashboard">
          <i class="fa fa-bar-chart"></i>
          <span>DashBoard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-sitemap"></i>
          <span>Cadeia de Contratos</span>
        </a>
      </li>
      <li>
        <a href="index.php?go=cadContrato">
          <i class="fa fa-file-text"></i>
          <span>Cadastro de Contratos</span>
        </a>
      </li>
      <li>
        <a href="pagina.php?pag=perfil">
          <i class="fa fa-user"></i>
          <span>Perfil</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-diamond"></i>
          <span>Planos</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href=""><i class="fa fa-circle-o"></i> Cadastrar</a>
          </li>
        </ul>
      </li>

    </ul>
    <!-- / sidebar menu:  -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
        <span class="fa fa-cogs" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
        <span class="fa fa-arrows-alt" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
        <span class="fa fa-window-close-o" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Logout">
        <span class="fa fa-sign-out" aria-hidden="true"></span>
      </a>
    </div>
  </section>
  <!-- / sidebar menu -->
</aside>