<!-- botao de confirmcao de exclusao -->


<div class="modal fade" id="modal-confirmacao-delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/excluir" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Confirme sua Ação</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Deseja realmente excluir esse Funcionário?</p>
          <input type="hidden" id="id_cliente" name="id_cliente" value="">
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Sim</button>
        </div>
      </form>

    </div>
  </div>
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Funcionários</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Funcionários</li>
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

        <?php if ($alert == 'sucess_create') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Funcionário cadastrado com sucesso!
              </div>
            </div>
          </div>

        <?php elseif ($alert == 'sucess_delete') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Funcionário excluído com sucesso!
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php endif; ?>

      <div class="row">
        <div class="col lg 12">
          <div class="card">
            <div class="card-header">
              <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios/novo" class="btn btn-info"> <i class="fas fa-user-plus"></i> Novo Funcionário</a>
            </div>

            <div class="card-body">
              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th style="width: 10px">Código</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data de Contratação</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>Dia do Pagamento</th>
                    <th>Ações</th>
                  </tr>
                </thead>

                <tbody>
                  <?php if (!empty($funcionarios)) : ?>
                    <!-- SE O ARRAY NAO FOR VAZIO  PERCORRE O FOREACH-->

                    <?php foreach ($funcionarios as $funcionario) : ?>

                      <tr>
                        <td><?= $funcionario["id_funcionario"]      ?></td>
                        <td><?= $funcionario["nome"]                ?></td>
                        <td><?= $funcionario["data_de_nascimento"]  ?></td>
                        <td><?= $funcionario["rg"]                  ?></td>
                        <td><?= $funcionario["cpf"]                 ?></td>
                        <td><?= $funcionario["telefone"]            ?></td>
                        <td><?= $funcionario["data_de_contratacao"] ?></td>
                        <td><?= $funcionario["cargo"]               ?></td>
                        <td><?= $funcionario["salario"]             ?></td>
                        <td><?= $funcionario["dia_do_pagamento"]    ?></td>
                        <td>
                          <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios/ver/<?= $funcionario["id_funcionario"] ?>" class="btn btn-primary"> <i class="fas fa-search"></i> </a>
                          <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios/editar/<?= $funcionario["id_funcionario"] ?>" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                          <button type="button" class="btn btn-danger" onclick="document.getElementById('id_cliente').value = '<?= $funcionario['id_funcionario'] ?>' " data-toggle="modal" data-target="#modal-confirmacao-delete"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>

                    <?php endforeach; ?>

                  <?php else : ?>
                    <!-- SE ELE FOR VAZIO -->

                    <tr>
                      <td colspan="12">Nenhum Funcionário cadastrado!</td>
                    </tr>

                  <?php endif; ?>
                </tbody>

              </table>
            </div>

            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->