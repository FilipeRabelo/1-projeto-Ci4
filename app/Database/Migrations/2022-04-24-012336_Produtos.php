<?php

  namespace App\Database\Migrations;

  use CodeIgniter\Database\Migration;

  class Produtos extends Migration {

    public function up() {

      $this->forge->addField([

        "id_produto"         => [
          "type"             => "INT",
          "constraint"       => 9,
          "usigned"          => true,
          "auto_increment"   => true,
        ],

        "nome"               => [
          "type"             => 'VARCHAR',
          "constraint"       => 128
        ],

        "descricao" => [
          "type"             => 'VARCHAR',
          "constraint"       => 128
        ],

        "quantidade"         => [
          "type"             => "INT"          
        ],

        "quantidade_minima"  => [
          "type"             => "INT"          
        ],

        "valor_de_compra"    => [
          "type"             => "DOUBLE"          
        ],

        "valor_de_venda"     => [
          "type"             => "DOUBLE"
        ],

        "margem_de_lucro"    => [
          "type"             => "DOUBLE"          
        ],

        "validade "          => [
          "type"             => "INT"
        ],     

        'created_at'         => [
          'type'             => "DATETIME"
        ],

        'updated_at'         => [
          'type'             => "DATETIME"
        ],

        'delete_at'          => [
          'type'             => "DATETIME"
        ],

      ]);

      $this->forge->addKey("id_produto", true);
      $this->forge->createTable("produtos");

    }

    public function down() {

      $this->forge->dropTable("produtos");

    }

  }

?>
