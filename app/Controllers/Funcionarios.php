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

      $data["funcionarios"] = $this->funcionario_model->findAll();  // PARA RECUPERAR TODOS OS REGISTROS //

      echo View("templates/header");
      echo View("funcionarios/index", $data);
      echo View("templates/footer");

    }

    public function novo(){

      echo View("templates/header");
      echo View("funcionarios/form"); // form, nova forma de criar o novo
      echo View("templates/footer");

    }

    public function store(){

      $dados = $this->request->getVar();

      $this->funcionario_model->insert($dados);

      $session = session();
      $session->setFlashdata("alert", "sucess_create");

      return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios");

    }



  }

?>