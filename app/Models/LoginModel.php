<?php

  // CONFIGURAÇAO DO MODEL

  namespace App\Models;

  use CodeIgniter\Model;

  // FUNÇÔES INTERNAS  (metodos)

  // protected para criar as PROPRIEDADES DO METODO

  class LoginModel extends Model{

    protected $table         = "logins";   // nome da tabela
    protected $primeryKey    = "id_login";
    protected $allowedFields = [             // allowedFields -> Campos permitidos
    // ARRAY PARA COLOCAR TODAS AS COLUNAS DAS MIGRATES

      "id_login",
      "usuario",
      "senha",
      "primeiro_nome"     

    ];
    protected $useTimestamps = true;         // useTimestamps -> usar carimbos de tempos
    protected $createdField  = "created_at"; // campos permitidos = criado em
    protected $updatedField  = "updated_at"; // atualizar em
    protected $deleteField   = "delete_at";  // deletar em

  }
