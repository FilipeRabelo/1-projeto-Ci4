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
                      ->where( "senha" , md5($dados["senha"]))  // VERIFICANDO SE DADOS CORRESPONDEN AOS DADOS CADASTRADOS NO BD
                      ->first();

      //SE EXISTIR USUARIO

      $session = session();

      if(!empty($usuario)):  // empty vazio // SE A VARIAVEL EXISTE CRIA A SESSAO

        $session->set("primeiro_nome", $usuario["primeiro_nome"]);

        $session->setFlashdata("alert", "sucess_login");

        return redirect()->to("/inicio");

      endif;

      //SE NAO EXISTIR USUARIO

      $session->setFlashdata("alert", "error_login");

      return redirect()->to("/login");

    }


    // PARA SAIR DA SESSAO

    public function logout(){

      $session = session();

      $session->destroy();

      return redirect()->to("/login");

    }

    // TROCAR A SENHA
    //CRIPTOGRAFANDO SENHA

    public function trocarSenha(){

      echo View("templates/header");
      echo View("login/trocar_senha");
      echo View("templates/footer");      

    }

    //VERIFICAR OS DADOS PARA FAZER A TROCA //
    //senha criptografada

    public function store(){

      $dados = $this->request->getVar();      

      $usuario = $this->login_model
                      ->where("id_login", 1)
                      ->first();

      $session = session();
      
      if(md5($dados["senha_atual"]) == $usuario["senha"]):

        if($dados["nova_senha"] == $dados["confirmar_nova_senha"]):

          $this->login_model->where("id_login", 1)
                            ->set("senha", md5($dados["nova_senha"]))
                            ->update();

          
          $session->setFlashdata("alert", "sucess_trocar_senha");

          return redirect()->to("/login/trocarSenha");          

        endif;

      endif;

      // SE DER ERRO //

      $session->setFlashdata("alert", "error_trocar_senha");

      return redirect()->to("/login/trocarSenha");   

    }

  }

?>