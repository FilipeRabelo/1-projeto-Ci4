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
          <p>Deseja realmente excluir esse cliente?</p>
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
          <h1 class="m-0">Clientes</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
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
        <div class="col lg 12">
          <div class="card">
            <div class="card-header">
              <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/novo" class="btn btn-info">Novo Cliente</a>
            </div>

            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Código</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>telefone</th>
                    <th>Endereço</th>
                    <th>Limite de Crédito</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($clientes as $cliente) : ?>

                    <tr>
                      <td><?= $cliente["id_cliente"]         ?></td>
                      <td><?= $cliente["nome"]               ?></td>
                      <td><?= $cliente["data_de_nascimento"] ?></td>
                      <td><?= $cliente["telefone"]           ?></td>
                      <td><?= $cliente["endereco"]           ?></td>
                      <td><?= $cliente["limite_de_credito"]  ?></td>
                      <td>
                        <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/ver/<?= $cliente["id_cliente"] ?>" class="btn btn-primary">Ver</a>
                        <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/editar/<?= $cliente["id_cliente"] ?>" class="btn btn-warning">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('id_cliente').value = '<?= $cliente['id_cliente'] ?>' " data-toggle="modal" data-target="#modal-confirmacao-delete">Excluir
                        </button>
                      </td>
                    </tr>

                  <?php endforeach; ?>

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