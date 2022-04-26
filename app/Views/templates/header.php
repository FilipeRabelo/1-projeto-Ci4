<?php

// REGLA DE VALIDAÇÂO

$session = session();

$primeiro_nome = $session->get("primeiro_nome");

if ($primeiro_nome == null) :

  echo "    
      <script>
        alert('Acesse sua Conta para Continuar');
        window.location.href = '/login';
      </script>    
    ";

endif;

?>

<!DOCTYPE html>
<!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Tech</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.min.css') ?>"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- DataTables -->
  <link rel="stylesheet" href=" <?= base_url("theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") ?> ">
  <link rel="stylesheet" href=" <?= base_url("theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") ?> ">
  <link rel="stylesheet" href=" <?= base_url("theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css") ?>">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("theme/dist/css/adminlte.min.css") ?>">
  <!--tem q colocar o THEME -->

  <!-- JS -->
  <script src=" <?= base_url('/assets/js/Chart.js') ?> "> </script>
  <!-- C:\xampp\htdocs\curso-Ci4\1-projeto-Ci4\public\assets\js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>




</head>
<!-- hold-transition sidebar-mini text-sm layout-fixed -->

<body class="  hold-transition layout-fixed sidebar-mini layout-footer-fixed layout-navbar-fixed
">
  <div class="wrapper">

    <?php include_once("navbar.php")  ?>
    <?php include_once("sidebar.php") ?>

    <!--  -->