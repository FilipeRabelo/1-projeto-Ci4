<?php

  namespace App\Controllers;
  
  use App\Models\LoginModel;
  use CodeIgniter\Controller;

  class Login extends Controller{

    private $login_model;

    function __construct(){

      $this->login_model = new LoginModel();
      
    }

    public function index(){   
      
      echo View("login/index");     

    }

    // AUTENTIFICAÇÃO //

    public function autenticar(){
      
      $dados = $this->request->getVar();       // RECUPERANDO TODOS OS DADOS Q ESTAO VINDO DO FORM

      $usuario = $this->login_model
                      ->where("usuario", $dados["usuario"])
                      ->where( "senha" , $dados["senha"])  // VERIFICANDO SE DADOS CORRESPONDEN AOS DADOS CADASTRADOS NO BD
                      ->first();

      //SE EXISTIR USUARIO

      $session = session();

      if(!empty($usuario)):  // empty vazio // SE A VARIAVEL EXISTE CRIA A SESSAO

        $session->set("primeiro_nome", $usuario["primeiro_nome"]);

        $session->setFlashdata("alert", "sucess_login");

        return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/inicio");

      endif;

      //SE NAO EXISTIR USUARIO

      $session->setFlashdata("alert", "error_login");

      return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/login");

    }


    // PARA SAIR DA SESSAO

    public function logout(){

      $session = session();

      $session->destroy();

      return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/login");

    }

  }

?>