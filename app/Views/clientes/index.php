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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                                    <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/editar/<?= $cliente["id_cliente"] ?>" class="btn btn-warning">Editar</a>
                                                    <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/excluir/<?= $cliente["id_cliente"] ?>" class="btn btn-danger">Excluir</a>
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