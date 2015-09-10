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
    
   
    
    public function inserir()
    {
        
    }
    
    public function listar()
    {
        
        $qry = "SELECT * FROM `produtos`";
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
