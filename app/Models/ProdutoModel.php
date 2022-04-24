<?php

  // CONFIGURAÇAO DO MODEL

  namespace App\Models;

  use CodeIgniter\Model;

  // FUNÇÔES INTERNAS  (metodos)

  // protected para criar as PROPRIEDADES DO METODO

  class ProdutoModel extends Model{

    protected $table         = "produtos";   // nome da tabela
    protected $primeryKey    = "id_produto";
    protected $allowedFields = [             // allowedFields -> Campos permitidos
    // ARRAY PARA COLOCAR TODAS AS COLUNAS DAS MIGRATES
    
      "id_produto",
      "nome",
      "descricao",
      "quantidade",
      "quantidade_minima",
      "valor_de_compra",
      "valor_de_venda",
      "margem_de_lucro",
      "validade"

    ];
    protected $useTimestamps = true;         // useTimestamps -> usar carimbos de tempos
    protected $createdField  = "created_at"; // campos permitidos = criado em
    protected $updatedField  = "updated_at"; // atualizar em
    protected $deleteField   = "delete_at";  // deletar em

  }

?>
