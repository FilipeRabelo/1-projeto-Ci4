<?php

    namespace App\Controllers;

    use CodeIgniter\Controller;

    class Clientes extends Controller {

        public function novo() {
            echo View('templates/header');
            echo View('clientes/novo');
            echo View('templates/footer');
        }

        //Funcao para cadastrar e inserir os dados no banco de dados
        public function store(){

            $dados = $this->request->getVar();  // atraves disso vamos recuperar tudo q estiver sendo mandando para essa funcao

            dd($dados);

        }
        
    }
