<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Trocar senha</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="/inicio">
                <i class="nav-icon fas fa-home"></i>&nbsp Inicio</a>
            </li>
            <li class="breadcrumb-item active">
              <i class="nav-icon fas fa-user-lock"></i> &nbsp Trocar senha
            </li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <!-- INICIO ATUALIZANDO a senha -->
      <?php
      $session = session();
      $alert   = $session->get("alert");  // VARIAVEL alert RECUPERADA DO CONTROLLER
      ?>

      <?php if (isset($alert)) : ?>

        <?php if ($alert == 'sucess_trocar_senha') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa-solid fa-check"></i>
                &nbsp Senha Atualizada com Sucesso!
              </div>
            </div>
          </div>

        <?php elseif ($alert == 'error_trocar_senha') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <!-- <i class="fa-solid fa-xmark-large"></i> -->
                <i class="fa-solid fa-xmark"></i>
                &nbsp Erro ao Atualizar Senha, Verifique os dados Digitados!
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php endif; ?>
      <!-- FIM ATUALIZANDO a senha -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">

            <div class="card-header">
              <h3 class="card-title">Dados</h3>
            </div>

            <form action="/login/store" method="POST">
              <div class="card-body">
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Senha Atual</label>
                      <input type="password" class="form-control" name="senha_atual" placeholder="Digite a Senha Atual...">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Nova Senha</label>
                      <input type="password" class="form-control" name="nova_senha" placeholder="Digite a Nova Senha...">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Confirmar Nova Senha</label>
                      <input type="password" class="form-control" name="confirmar_nova_senha" placeholder="Confirme sua Nova Senha...">
                    </div>
                  </div>

                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Atualizar Senha &nbsp&nbsp<i class="fas fa-save"></i> </button>
              </div>

            </form>

          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->