<?php

  namespace App\Controllers;

  use App\Models\FuncionarioModel;

  use CodeIgniter\Controller;

  class Funcionarios extends Controller{

    private $funcionario_model;

    function __construct(){

      $this->funcionario_model = new FuncionarioModel;
      
    }

    public function index(){

      echo View("templates/header");
      echo View("funcionarios/index");
      echo View("templates/footer");

    }

  }

?>