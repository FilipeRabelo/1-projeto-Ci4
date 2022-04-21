<?php

  namespace App\Database\Migrations;

  use CodeIgniter\Database\Migration;

  class Clientes extends Migration{

    #METODO USADO PARA CRIAR A TABELA COM SUAS COLUNAS NO BANCO DE DADOS
    public function up() {

      $this->forge->addField([

        'id_cliente'         => [
          'type'           => "INT",
          'constraint'     => 9,
          'usigned'        => true,
          'auto_increment' => true,
        ],

        'nome'               => [
          'type'           => 'VARCHAR',
          'constraint'     => 128
        ],

        'data_de_nascimento' => [
          'type'           => 'DATE'
        ],

        'telefone'           => [
          'type'           => 'INT',
          'constraint'     => 32
        ],

        'endereco'           => [
          'type'           => 'VARCHAR',
          'constraint'     => 128
        ],

        'limite_de_credito'  => [
          'type'           => "DOUBLE"
        ],

        'created_at'         => [
          'type'           => "DATETIME"
        ],

        'updated_at'         => [
          'type'           => "DATETIME"
        ],

        'delete_at'          => [
          'type'           => "DATETIME"
        ],

      ]);

      $this->forge->addKey('id_cliente', true);  #chave primaria
      $this->forge->createTable('clientes');     #nome da tabela

    }
    // FIM DA CRIACAO DA TABELA

    //METODO USADO PARA APAGAR A TABELA QNDO DIGITADO O COMANDO php spark migrates:rollback NO TERMINAL
    public function down() {

      $this->forge->dropTable("clientes");
    }
}
