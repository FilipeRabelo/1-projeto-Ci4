<?php    
    
  namespace App\Controllers;

  use App\Models\ClienteModel;
  use CodeIgniter\Controller;

  class Inicio extends Controller {

    private $cliente_model;

    function __construct(){
      
      $this->cliente_model = new ClienteModel();

    }

    public function index() {

      $total_de_clientes = count(

        $this->cliente_model->findAll()  

      );

      $data["total_de_clientes"] = $total_de_clientes;

      echo View("templates/header");
      echo View("inicio/index", $data);
      echo View("templates/footer");

    }

  }

?>
