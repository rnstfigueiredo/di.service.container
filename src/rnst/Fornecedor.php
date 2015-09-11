<?php

namespace rnst;

class Fornecedor {
    
    private $db;
    private $id;
    private $nome;
    private $email;


    public function __construct(ConexaoInterface $conexao) {
        
        $this->db = $conexao->conectar();
    }
    
    /*
    Create	INSERT  inserir
    Read (Retrieve)	SELECT listar
    Update	UPDATE atualizar
    Delete (Destroy) DELETE apagar
    */
    
    public function inserir($fornecedor)
    {
      
      $qry = "INSERT INTO `fornecedores` (`nome`, `email`) VALUES ('{$fornecedor['nome']}', '{$fornecedor['email']}')";
      $stmt = $this->db->prepare($qry);
      $stmt->execute();
        
        
    }
    
    public function listar($id = NULL)
    {
        $where = "";
        if($id != null){ $where = " WHERE `id` ={$id}";}
        $qry = "SELECT * FROM `fornecedores`".$where;
        $stmt = $this->db->prepare($qry);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function atualizar($fornecedor)
    {
        
        $qry = "UPDATE `code.educacion_diservice`.`fornecedores` SET `nome` = '{$fornecedor['nome']}', `email` = '{$fornecedor['email']}' WHERE `fornecedores`.`id` ={$fornecedor['id']};";
        $stmt = $this->db->prepare($qry);
        $stmt->execute();
    }
    
    public function apagar($id)
    {
        /**/
        $qry = "DELETE FROM `code.educacion_diservice`.`fornecedores` WHERE `fornecedores`.`id` = ".$id;
        $stmt = $this->db->prepare($qry);
        $stmt->execute();
    }
    
    
}