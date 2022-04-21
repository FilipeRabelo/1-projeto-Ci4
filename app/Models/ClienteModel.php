<?php

// CONFIGURAÇAO DO MODEL

namespace App\Models;

use CodeIgniter\Model;

    // FUNÇÔES INTERNAS  (metodos)

    // protected para criar as PROPRIEDADES DO METODO

    class ClienteModel extends Model{

        protected $table         = "clientes";   // nome da tabela
        protected $primeryKey    = "id_cliente";
        protected $allowedFields = [             // allowedFields -> Campos permitidos
        // ARRAY PARA COLOCAR TODAS AS COLUNAS DAS MIGRATES
            "id_cliente",
            "nome",
            "data_de_nascimento",
            "telefone",
            "endereco",
            "limite_de_credito"
                        
        ];
        protected $useTimestamps = true;         // useTimestamps -> usar carimbos de tempos
        protected $createdField  = "created_at"; // campos permitidos = criado em
        protected $updatedField  = "updated_at"; // atualizar em
        protected $deleteField   = "delete_at" ; // deletar em
                                   
    }
