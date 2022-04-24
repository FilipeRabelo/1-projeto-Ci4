<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

use CodeIgniter\Controller;

class Produtos extends Controller{

  private $produto_model;

  function __construct()  {

    $this->ProdutoModel = new ProdutoModel;

  }

  public function index() {


    $data["produtos"] = $this->ProdutoModel->findAll(); 

    

    echo View("templates/header");
    echo View("produtos/index", $data);
    echo View("templates/footer");
  }

  // public function index()  {

  //   $produtos = $this->produto_model->findAll(); 

  //   $data["produtos"] = $produtos;

  //   echo View('templates/header');
  //   echo View('produtos/index', $data);
  //   echo View('templates/footer');

  // }



  public function novo() {

    echo View('templates/header');
    echo View('produtos/novo');
    echo View('templates/footer');

  }



  // public function store(){

  //   $dados = $this->request->getVar(); 
  //   if (isset($dados["id_produto"])) :

  //     $this->produto_model
  //       ->where("id_produto", $dados["id_produto"])  
  //       ->set($dados)
  //       ->update();

  //     $session = session();
  //     $session->setFlashdata('alert', 'sucess_update');

  //     return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/editar/{$dados['id_produto']}");

  //   endif;

  //   $this->produto_model->insert($dados);    

  //   $session = session();
  //   $session->setFlashdata('alert', 'sucess_create');

  //   return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos");      

  // }

}




// namespace App\Controllers;

// use App\Models\ProdutoModel;

// use CodeIgniter\Controller;
// use CodeIgniter\HTTP\Request;

// class Produtos extends Controller{

//   private $produto_model;

//   function __construct()
//   {

//     $this->produto_model = new ProdutoModel;
//   }

//   public function index()
//   {

//     $data["produtos"] = $this->produto_model->findAll();  // PARA RECUPERAR TODOS OS REGISTROS //

//     echo View("templates/header");
//     echo View("produto/index", $data);
//     echo View("templates/footer");
//   }

//   public function ver($id_produto)
//   {

//     $data["produto"] = $this->produto_model
//       ->where("id_produto", $id_produto)
//       ->first();

//     echo View('templates/header');
//     echo View('produto/ver', $data);
//     echo View('templates/footer');
//   }

//   public function novo()
//   {

//     echo View("templates/header");
//     echo View("produto/form"); // form, nova forma de criar
//     echo View("templates/footer");
//   }

//   public function editar($id_produto)
//   {  // É PRECIDO DO ID //

//     //ESTOU ACESSANDO A MINHA INSTACIA CRIADA E VOU PROCURAR NOS ID CRIADOS O QUE ESTOU PASSANDO COMO PARAMETRO
//     $data["produto"] = $this->produto_model
//       ->where("id_produto", $id_produto)
//       ->first();

//     echo View("templates/header");
//     echo View("produtos/form", $data); // form, nova forma de criar e editar 
//     echo View("templates/footer");
//   }

//   public function delete()
//   {

//     $id_produto = $this->request->getVar("id_produto");

//     $this->produto_model
//       ->where("id_produto", $id_produto)  // WHERE PARA PROCURAR O ID_FUNCIONARIO
//       ->delete();

//     $session = session();
//     $session->setFlashdata('alert', 'sucess_delete');

//     return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos");
//   }

//   public function store()
//   {

//     $dados = $this->request->getVar();

//     $session = session();

//     if (isset($dados["id_produto"])) :
//       $this->produto_model->where("id_produto", $dados["id_produto"])
//         ->set($dados)
//         ->update();

//       $session->setFlashdata("alert", "sucess_update");

//       return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos/editar/{$dados['id_produto']}");

//     endif;

//     $this->produto_model
//       ->insert($dados);

//     $session->setFlashdata("alert", "sucess_create");

//     return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/produtos");
//   }
// }

   

?>