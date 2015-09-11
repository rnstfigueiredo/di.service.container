<?php

namespace rnst;

class Produto {
    private $db;
    private $id;
    private $fk_id_fornecedor;
    private $nome;
    private $unidade;


    public function __construct(ConexaoInterface $conexao) {
        
        $this->db = $conexao->conectar();
    }
    
   
    
    public function inserir($produto)
    {
        $qry = "INSERT INTO `produtos` (`fk_id_fornecedor`, `nome`, `unidade`) VALUES ('{$produto['fk_id_fornecedor']}','{$produto['nome']}', '{$produto['unidade']}')";
      $stmt = $this->db->prepare($qry);
      $stmt->execute();
    }
    
    public function listar()
    {
        
        $qry = "SELECT * FROM `produtos`";
        $stmt = $this->db->prepare($qry);
        $stmt->execute();        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function atualizar($produto)
    {
        $qry = "UPDATE `code.educacion_diservice`.`produtos` SET  `fk_id_fornecedor` = '{$produto['fk_id_fornecedor']}', `nome` = '{$produto['nome']}', `unidade` = '{$produto['unidade']}' WHERE `produtos`.`id` ={$produto['id']};";
        $stmt = $this->db->prepare($qry);
        $stmt->execute();
    }
    
    public function apagar($id)
    {
        $qry = "DELETE FROM `code.educacion_diservice`.`produtos` WHERE `produtos`.`id` = ".$id;
        $stmt = $this->db->prepare($qry);
        $stmt->execute();
        
    }
}
