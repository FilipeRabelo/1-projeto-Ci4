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
                            <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes" class="btn btn-success" style="margin-right: 15px;">Voltar</a>
                            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes">Clientes</a></li>
                            <li class="breadcrumb-item active">Atualizar</li>
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

                            <form action=" http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/store" method="POST">
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
                                                <label for="">Endereço</label>
                                                <input type="text" class="form-control" name="endereco" value="<?= $cliente["endereco"] ?>" placeholder="Digite seu Endereço...">
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
                                    <button type="submit" class="btn btn-primary">Atualizar</button>
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