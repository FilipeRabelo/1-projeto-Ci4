<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ver Funcionário</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios" class="btn btn-success" style="margin-right: 15px;"> <i class="fas fa-arrow-alt-circle-left"></i>&nbsp Voltar </a>
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio"><i class="nav-icon fas fa-home"></i>&nbsp Inicio</a></li>
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios"><i class="nav-icon fas fa-user-tie"></i> &nbsp Funcionários</a></li>
            <li class="breadcrumb-item active"><i class="nav-icon fas fa-user-tie"></i> &nbsp Ver</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">

            <div class="card-header">
              <h3 class="card-title">Dados Pessoais</h3>
            </div>

            <div class="card-body">
              <div class="row">

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" placeholder="Digite seu Nome..." value=" <?= $funcionario["nome"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Data de Nascimento</label>
                    <input type="date" class="form-control" value=" <?= $funcionario["data_de_nascimento"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">RG</label>
                    <input type="text" class="form-control" placeholder="Digite seu Rg" value=" <?= $funcionario["rg"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">CPF</label>
                    <input type="text" class="form-control" placeholder="Digite seu CPF..." value=" <?= $funcionario["cpf"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" placeholder="Digite seu Telefone..." value=" <?= $funcionario["telefone"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Data de Contratação</label>
                    <input type="date" class="form-control" placeholder="Digite a data de contratação..." value=" <?= $funcionario["data_de_contratacao"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Cargo</label>
                    <input type="text" class="form-control" placeholder="Digite seu Cargo..." value=" <?= $funcionario["cargo"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Salário</label>
                    <input type="text" class="form-control" placeholder="Digite seu Salário..." value=" <?= $funcionario["salario"] ?>  " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Dia de pagamento</label>
                    <input type="text" class="form-control" placeholder="Digite o dia do seu Pagamento..." value=" <?= $funcionario["dia_do_pagamento"] ?>  " disabled>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->