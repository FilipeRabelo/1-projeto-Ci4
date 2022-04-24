<!-- INICIO botao de confirmacao de exclusao -->

<div class="modal fade" id="modal-confirmacao-delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/delete" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Confirme sua Ação</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Deseja realmente excluir esse Produto?</p>
          <input type="hidden" id="id_produto" name="id_produto" value="">
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Sim</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- FIM botao de confirmacao de exclusao -->


<!-- CONTEUDO DA PAGINA -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produtos</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio"><i class="nav-icon fas fa-home"></i>&nbsp Inicio</a></li>
            <li class="breadcrumb-item active"><i class="nav-icon fas fa-box-open"></i> &nbsp Produtos</li>
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


      <!-- MENSAGEM DE EXCLUSAO OU ATUALIZAÇÃO -->
      <?php if (isset($alert)) : ?>

        <?php if ($alert == 'sucess_create') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Produto cadastrado com sucesso!
              </div>
            </div>
          </div>

        <?php elseif ($alert == 'sucess_delete') : ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Produto excluído com sucesso!
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php endif; ?>

      <div class="row">
        <div class="col lg 12">
          <div class="card">

            <div class="card-header">
              <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/novo" class="btn btn-info">
                <i class="fas fa-user-plus"></i> &nbsp Novo Produto
              </a>
            </div>

            <div class="card-body">
              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th style="width: 10px">Código</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Qtd</th>
                    <th>Qtd. Mínima</th>
                    <th>Ações</th>
                  </tr>
                </thead>

                <tbody>
                  <?php if (!empty($produtos)) : ?>
                    <!-- SE O ARRAY NAO FOR VAZIO  PERCORRE O FOREACH-->

                    <?php foreach ($produtos as $produto) : ?>

                      <tr>
                        <td><?= $produto["id_produto"]      ?></td>
                        <td><?= $produto["nome"]                ?></td>
                        <td><?= $produto["descricao"]           ?></td>
                        <td><?= $produto["quantidade"]          ?></td>
                        <td><?= $produto["quantidade_minima"]   ?></td>


                        <td>
                          <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/ver/<?= $produto["id_produto"] ?>" 
                             class="btn btn-primary"><i class="fas fa-search"></i>
                          </a>

                          <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/editar/<?= $produto["id_produto"] ?>" 
                             class="btn btn-warning"><i class="fas fa-edit"></i>
                          </a>

                          <button type="button" class="btn btn-danger" onclick="document.getElementById('id_produto').value = '<?= $produto['id_produto'] ?>' " 
                                   data-toggle="modal" data-target="#modal-confirmacao-delete"><i class="fas fa-trash"></i>
                          </button>

                        </td>
                      </tr>

                    <?php endforeach; ?>

                  <?php else : ?>
                    <!-- SE ELE FOR VAZIO -->

                    <tr>
                      <td colspan="12">Nenhum Produto cadastrado!</td>
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