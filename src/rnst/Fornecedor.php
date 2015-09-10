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
    
    public function inserir()
    {
        
    }
    
    public function listar($id = NULL)
    {
        $where = "";
        if($id != null){ $where = " WHERE `id` ={$id}";}
        $qry = "SELECT * FROM `fornecedores`".$where;
        $stmt = $this->db->prepare($qry);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function atualizar()
    {
        
    }
    
    public function apagar()
    {
        
    }
    
    
}