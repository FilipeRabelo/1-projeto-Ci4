    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dados do Cliente</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes" class="btn btn-success" style="margin-right: 15px;">Voltar</a>
                            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes">Clientes</a></li>
                            <li class="breadcrumb-item active">Dados do Cliente</li>
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
                                            <input type="text" class="form-control" value="<?= $cliente["nome"] ?>" placeholder="Digite seu Nome..." disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Data de Nascimento</label>
                                            <input type="date" class="form-control" value="<?= $cliente["data_de_nascimento"] ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Telefone</label>
                                            <input type="text" class="form-control" value="<?= $cliente["telefone"] ?>" placeholder="Digite seu Telefone..." disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label for="">Endereço</label>
                                            <input type="text" class="form-control" value="<?= $cliente["endereco"] ?>" placeholder="Digite seu Endereço..." disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Limite de Credito</label>
                                            <input type="text" class="form-control" value="<?= $cliente["limite_de_credito"] ?>" disabled>
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