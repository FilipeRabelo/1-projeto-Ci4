<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= (isset($funcionario)) ? "Editar" : "Novo" ?> Funcionário</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios" class="btn btn-success" style="margin-right: 15px;"> <i class="fas fa-arrow-alt-circle-left"></i>&nbsp Voltar </a>
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio"><i class="nav-icon fas fa-home"></i>&nbsp Inicio</a></li>
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios"><i class="nav-icon fas fa-user-tie"></i> &nbsp Funcionários</a></li>
            <li class="breadcrumb-item active"><i class="nav-icon fas fa-user-tie"></i> &nbsp Novo</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <!-- INICIO ATUALIZANDO O FUNCIOANRIO -->
      <?php
      $session = session();
      $alert   = $session->get("alert");  // VARIAVEL alert RECUPERADA DO CONTROLLER
      ?>

      <?php if (isset($alert)): ?>

        <?php if ($alert == 'sucess_update'): ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Funcionário Atualizado com sucesso!
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php endif; ?>
      <!-- FIM ATUALIZANDO O FUNCIOANRIO -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">

            <div class="card-header">
              <h3 class="card-title">Dados Pessoais</h3>
            </div>

            <form action=" http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios/store" method="POST">
              <div class="card-body">

                <div class="row">

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Nome</label>
                      <input type="text" class="form-control" name="nome" placeholder="Digite seu Nome..." value=" <?= (isset($funcionario)) ? $funcionario["nome"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Data de Nascimento</label>
                      <input type="date" class="form-control" name="data_de_nascimento" value=" <?= (isset($funcionario)) ? $funcionario["data_de_nascimento"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">RG</label>
                      <input type="text" class="form-control" name="rg" placeholder="Digite seu Rg" value=" <?= (isset($funcionario)) ? $funcionario["rg"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">CPF</label>
                      <input type="text" class="form-control" name="cpf" placeholder="Digite seu CPF..." value=" <?= (isset($funcionario)) ? $funcionario["cpf"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Telefone</label>
                      <input type="text" class="form-control" name="telefone" placeholder="Digite seu Telefone..." value=" <?= (isset($funcionario)) ? $funcionario["telefone"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Data de Contratação</label>
                      <input type="date" class="form-control" name="data_de_contratacao" placeholder="Digite a data de contratação..." value=" <?= (isset($funcionario)) ? $funcionario["data_de_contratacao"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Cargo</label>
                      <input type="text" class="form-control" name="cargo" placeholder="Digite seu Cargo..." value=" <?= (isset($funcionario)) ? $funcionario["cargo"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Salário</label>
                      <input type="text" class="form-control" name="salario" placeholder="Digite seu Salário..." value=" <?= (isset($funcionario)) ? $funcionario["salario"] : "" ?> ">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Dia de pagamento</label>
                      <input type="text" class="form-control" name="dia_do_pagamento" placeholder="Digite o dia do seu Pagamento..." value=" <?= (isset($funcionario)) ? $funcionario["dia_do_pagamento"] : "" ?> ">
                    </div>
                  </div>

                  <?php if (isset($funcionario)) :  ?>
                    <input type="hidden" name="id_funcionario" value="<?= $funcionario["id_funcionario"] ?>">
                  <?php endif; ?>

                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary"> <?= (isset($funcionario)) ? "Atualizar &nbsp" : "Cadastrar &nbsp" ?> <i class="fas fa-save"></i> </button>
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