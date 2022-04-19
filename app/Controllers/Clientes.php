<?php

    namespace App\Controllers;

    use App\Models\ClienteModel;
    use CodeIgniter\Controller;

    class Clientes extends Controller {

        private $cliente_model;

        function __construct() {

           $this->cliente_model = new ClienteModel();
            
        }

        //METODO PARA RECUPERAR TUDO O Q ESTA NO BANCO DE DADOS/ TODOS OS CLIENTES CADASTRADOS E VAMO JOGAR DENTRO DE UMA VARIAVEL $CLIENTE
        public function index(){

            $clientes = $this->cliente_model->findAll(); //findAll para recuperar os dados

            $data["clientes"] = $clientes;

            echo View('templates/header');
            echo View('clientes/index', $data);
            echo View('templates/footer');

        }

        public function novo() {

            echo View('templates/header');
            echo View('clientes/novo');
            echo View('templates/footer');
        }

        public function editar($id_cliente){

            $cliente = $this->cliente_model
                                        ->where("id_cliente" , $id_cliente)
                                        ->first();

            $data["cliente"] = $cliente;

            echo View('templates/header');
            echo View('clientes/editar', $data);
            echo View('templates/footer');

        }

        public function excluir($id_cliente){

            $this->cliente_model 
                            ->where("id_cliente", $id_cliente)
                            ->delete();

                                       
            return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes");
         

        }

        //Funcao para cadastrar e inserir os dados no banco de dados
        public function store(){

            $dados = $this->request->getVar();        // AQUI EU RECUPERO tudo q estiver sendo mandando para essa funcao

            if(isset($dados["id_cliente"])):

                $this->cliente_model
                     ->where("id_cliente", $dados["id_cliente"])  // ESTOU ATUALIZANDO OS DADOS REFERENTE AO ID CORRESPONDENTE Q ESTA DENTRO DO MEU ARRAY
                     ->set($dados)
                     ->update();

                return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes/editar/{$dados['id_cliente']}");

            endif;

            $this->cliente_model->insert($dados);     // AQUI EU CADASTRO

            return redirect()->to("http://localhost/curso-Ci4/1-projeto-Ci4/public/clientes");  // AQUI EU REDIRECIONO PARA A URL

                #me atendar as palavras no plural

        }
        
    }
