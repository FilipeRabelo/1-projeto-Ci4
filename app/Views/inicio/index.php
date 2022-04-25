<?php

$session = session();

$primeiro_nome = $session->get("primeiro_nome");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Seja Bem-Vindo <?= $primeiro_nome ?> !</h1>
        </div><!-- /.col -->
        <!-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div> -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="content">
    <div class="container-fluid">

      <!-- CONTEUDO -->

      <div class="row">

        <!-- /.1.col -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Clientes</span>
              <span class="info-box-number"><?= $total_de_clientes ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /2.col -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-user-tie"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Funcionários</span>
              <span class="info-box-number"><?= $total_de_funcionarios ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /3.col -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Produtos</span>
              <span class="info-box-number"><?= $total_de_produtos ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div> <!-- FIM DIV ROW -->

      <div class="row">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Gráfico de Barra</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <!-- <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> -->
              <canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
            </div>
          </div>

        </div>
      </div>

    </div> <!-- FIM div class="container-fluid" -->

  </div> <!-- /.content -->

</div> <!-- /.content-wrapper -->

<script>
  new Chart(document.getElementById("chartjs-1"), {
    "type": "bar",
    "data": {
      "labels": ["Clientes", "Funcionários", "Produtos"],
      "datasets": [{
        "label": "Total",
        "data": [<?= $total_de_clientes ?>, <?= $total_de_funcionarios ?>, <?= $total_de_produtos ?>],
        "fill": false,
        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "yAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });