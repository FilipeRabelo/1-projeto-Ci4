<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dados do Produto</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos" class="btn btn-success" style="margin-right: 15px;"> <i class="fas fa-arrow-alt-circle-left"></i>&nbsp Voltar </a>
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio"><i class="nav-icon fas fa-home"></i>&nbsp Inicio</a></li>
            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos"><i class="nav-icon fas fa-user-tie"></i> &nbsp Produtos</a></li>
            <li class="breadcrumb-item active"><i class="nav-icon fas fa-user-tie"></i> &nbsp Dados</li>
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
              <h3 class="card-title">Dados do Produto</h3>
            </div>

            <div class="card-body">
              <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" value=" <?= $produto["nome"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="">Descricao</label>
                    <input type="text" class="form-control" value=" <?= $produto["descricao"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Quantidade</label>
                    <input type="text" class="form-control" value=" <?= $produto["quantidade"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Quantidade mínima</label>
                    <input type="text" class="form-control" value=" <?= $produto["quantidade_minima"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Valor de compra</label>
                    <input type="text" class="form-control" value=" <?= $produto["valor_de_compra"] ?> " disabled>
                  </div>
                </div>

                <div class=" col-lg-3">
                  <div class="form-group">
                    <label for="">Valor de venda</label>
                    <input type="text" class="form-control" value=" <?= $produto["valor_de_venda"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Margem de lucro</label>
                    <input type="text" class="form-control" value=" <?= $produto["margem_de_lucro"] ?> " disabled>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Validade</label>
                    <input type="date" class="form-control" value=" <?= $produto["validade"] ?> " disabled>
                  </div>
                </div>


                <?php if (isset($produto)) :  ?>
                  <input type="hidden" name="id_produto" value="<?= $produto["id_produto"] ?>">
                <?php endif; ?>

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