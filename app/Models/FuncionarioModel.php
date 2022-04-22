<?php

  // CONFIGURAÇAO DO MODEL

  namespace App\Models;

  use CodeIgniter\Model;

  // FUNÇÔES INTERNAS  (metodos)

  // protected para criar as PROPRIEDADES DO METODO

  class FuncionarioModel extends Model{

    protected $table         = "funcionarios";   // nome da tabela
    protected $primeryKey    = "id_funcionario";
    protected $allowedFields = [             // allowedFields -> Campos permitidos
    // ARRAY PARA COLOCAR TODAS AS COLUNAS DAS MIGRATES
      "id_funcionario",
      "nome",
      "data_de_nascimento",
      "rg",
      "cpf",
      "telefone",
      "data_de_contratacao",
      "cargo",
      "salario",
      "dia_do_pagamento"

    ];
    protected $useTimestamps = true;         // useTimestamps -> usar carimbos de tempos
    protected $createdField  = "created_at"; // campos permitidos = criado em
    protected $updatedField  = "updated_at"; // atualizar em
    protected $deleteField   = "delete_at"; // deletar em

  }

?>
