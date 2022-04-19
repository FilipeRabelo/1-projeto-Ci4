<?php

    namespace App\Controllers;

    use App\Models\ClienteModel;
    use CodeIgniter\Controller;

    class Clientes extends Controller {

        private $cliente_model;

        function __construct() {

           $this->cliente_model = new ClienteModel();
            
        }

        public function novo() {
            echo View('templates/header');
            echo View('clientes/novo');
            echo View('templates/footer');
        }

        //Funcao para cadastrar e inserir os dados no banco de dados
        public function store(){

            $dados = $this->request->getVar();        // AQUI EU RECUPERO tudo q estiver sendo mandando para essa funcao

            $this->cliente_model->insert($dados);     // AQUI EU CADASTRO

            return redirect()->to("/clientes/novo");  // AQUI EU REDIRECIONO PARA A URL

                #me atendar as palavras no plural

        }
        
    }
