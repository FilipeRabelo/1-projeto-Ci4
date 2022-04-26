<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary navbar-light elevation-4 " style="background-color: #17a2b8;">
  <!-- Brand Logo -->
  <a href="/inicio" class="brand-link " style="background-color: #17a2b8">
    <img src=" <?= base_url("theme/dist/img/AdminLTELogo.png") ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><strong>All Tech</strong></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/inicio" class="nav-link">
            <!-- <i class="fa-solid fa-house-chimney"></i> -->
            <i class="nav-icon fas fa-home"></i>
            <p>
              <strong>Início</strong>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/clientes" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              <strong>Clientes</strong>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/funcionarios" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              <strong>Funcionários</strong>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/produtos" class="nav-link">
            <i class="nav-icon fas fa-box-open"></i>
            <p>
              <strong>Produtos</strong>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/login/trocarSenha" class="nav-link">
            <i class="nav-icon fas fa-user-lock"></i>
            <p>
              <strong>Trocar Senha</strong>
            </p>
          </a>
        </li>

      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>