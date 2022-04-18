<?php

    namespace App\Controllers;

    use CodeIgniter\Controller;

    class Clientes extends Controller{

        public function novo(){

           
            echo View("templates/header");
            echo View("clientes/novo");
            echo View("templates/footer");

        }

    }

?>