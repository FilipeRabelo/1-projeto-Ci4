<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Atualizar dados do Cliente</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/clientes" class="btn btn-success" style="margin-right: 15px;"> <i class="fas fa-arrow-alt-circle-left"></i>&nbsp Voltar </a>
            <li class="breadcrumb-item"><a href="/inicio"><i class="nav-icon fas fa-home"></i> &nbsp Inicio</a></li>
            <li class="breadcrumb-item"><a href="/clientes"><i class="nav-icon fas fa-users"></i> &nbsp Clientes</a></li>
            <li class="breadcrumb-item active"><i class="nav-icon fas fa-users"></i> &nbsp Atualizar</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <?php
      $session = session();
      $alert   = $session->get("alert");  // VARIAVEL alert RECUPERADA DO CONTROLLER
      ?>

      <?php if (isset($alert)) : ?>

        <?php if ($alert == 'sucess_update') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa-solid fa-check"></i>
                &nbsp Cliente atualizado com sucesso!
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php endif; ?>

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Dados Pessoais</h3>
            </div>

            <form action="/clientes/store" method="POST">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Nome</label>
                      <input type="text" class="form-control" name="nome" value="<?= $cliente["nome"] ?>" placeholder="Digite seu Nome...">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Data de Nascimento</label>
                      <input type="date" class="form-control" name="data_de_nascimento" value="<?= $cliente["data_de_nascimento"] ?>">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Telefone</label>
                      <input type="text" class="form-control" name="telefone" value="<?= $cliente["telefone"] ?>" placeholder="Digite seu Telefone...">
                    </div>
                  </div>

                  <div class="col-lg-9">
                    <div class="form-group">
                      <label for="">Endere??o</label>
                      <input type="text" class="form-control" name="endereco" value="<?= $cliente["endereco"] ?>" placeholder="Digite seu Endere??o...">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Limite de Credito</label>
                      <input type="text" class="form-control" name="limite_de_credito" value="<?= $cliente["limite_de_credito"] ?>">
                    </div>
                  </div>

                  <input type="hidden" name="id_cliente" value="<?= $cliente["id_cliente"] ?>">

                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Atualizar &nbsp <i class="fas fa-save"></i></button>
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