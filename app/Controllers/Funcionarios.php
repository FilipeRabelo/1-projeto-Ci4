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

    public function ver($id_funcionario){

      $data["funcionario"] = $this->funcionario_model
                           ->where("id_funcionario", $id_funcionario)
                           ->first();      

      echo View('templates/header');
      echo View('funcionarios/ver', $data);
      echo View('templates/footer');

    }

    public function novo(){

      echo View("templates/header");
      echo View("funcionarios/form"); // form, nova forma de criar
      echo View("templates/footer");

    }

    public function editar($id_funcionario){  // É PRECIDO DO ID //

      //ESTOU ACESSANDO A MINHA INSTACIA CRIADA E VOU PROCURAR NOS ID CRIADOS O QUE ESTOU PASSANDO COMO PARAMETRO
      $data["funcionario"] = $this->funcionario_model
                           ->where("id_funcionario", $id_funcionario)
                           ->first();

      echo View("templates/header");
      echo View("funcionarios/form", $data); // form, nova forma de criar e editar 
      echo View("templates/footer");

    }

    public function delete($id_funcionario){

      $this->funcionario_model
            ->where("id_funcionario", $id_funcionario)
            ->delete();

      $session = session();
      $session->setFlashdata('alert', 'sucess_delete');

      return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios");

    }

    public function store(){

      $dados = $this->request->getVar();

      $session = session();

      if(isset($dados["id_funcionario"])):
        $this->funcionario_model->where("id_funcionario", $dados["id_funcionario"])
                                ->set($dados)
                                ->update();

        $session->setFlashdata("alert", "sucess_update");

        return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios/editar/{$dados['id_funcionario']}");

      endif;

        $this->funcionario_model
             ->insert($dados);
      
        $session->setFlashdata("alert", "sucess_create");

        return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/funcionarios");

    }

  }

?>