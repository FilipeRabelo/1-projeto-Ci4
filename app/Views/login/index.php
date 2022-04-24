<?php 

  $session = session();

  $alert   = $session->get("alert");

?>



<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Tech</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url("theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css") ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("theme/dist/css/adminlte.min.css") ?>">

  </head>

  <body class="hold-transition login-page" style="background-color: #17a2b8;">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">

        <div class="card-header text-center">
          <a href="../../index2.html" class="h1">All Tech</a>
        </div>

        <div class="card-body">


          <!-- SE SENHA OU USUARIO ESTIVEREM ERRADOS -->
          <p class="login-box-msg">
            <?= (isset($alert) && $alert == "error_login" ) ? "<span style='color:red'>Usuário ou senha incorretos</span>" : "Entre com seu usuário e senha" ?>
          </p>

          <form action="http://localhost/curso-Ci4/1-projeto-Ci4/public/login/autenticar" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="password" class="form-control" name="senha" placeholder="Senha" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Acessar</button>
              </div>
              <!-- /.col -->
            </div>

          </form>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url("theme/plugins/jquery/jquery.min.js") ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url("theme/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url("theme/dist/js/adminlte.min.js") ?>"></script>
    
  </body>

</html>