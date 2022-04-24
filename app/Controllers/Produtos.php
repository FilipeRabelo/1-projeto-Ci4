<?php

  namespace App\Controllers;

  use App\Models\ProdutoModel;

  use CodeIgniter\Controller;

  class Produtos extends Controller{

    private $produto_model;

    function __construct()  {

      $this->produto_model = new ProdutoModel;

    }

    public function index() {

      $data["produtos"] = $this->produto_model->findAll();     

      echo View("templates/header");
      echo View("produtos/index", $data);
      echo View("templates/footer");

    }

    public function novo() {

      echo View('templates/header');
      echo View('produtos/form');
      echo View('templates/footer');

    }


    public function editar($id_produto){

      $data["produto"] = $this->produto_model->where("id_produto", $id_produto)
                                             ->first();

      echo View('templates/header');
      echo View('produtos/form', $data);
      echo View('templates/footer');

    }


    public function store(){

      $dados = $this->request->getVar();

      $session = session();

      // VERIFICAR SE A ACAO É EDITAR // 
      if (isset($dados["id_produto"])) :

        $this->produto_model
              ->where("id_produto", $dados["id_produto"])  
              ->set($dados)
              ->update();

        // $session = session();
        $session->setFlashdata('alert', 'sucess_update');

        return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/editar/{$dados['id_produto']}");

      endif;

      $this->produto_model->insert($dados);    

      // $session = session();
      $session->setFlashdata('alert', 'sucess_create');

      return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos");      

    }

  }






?>