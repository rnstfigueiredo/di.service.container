<?php

require_once 'ConexaoInterface.php';


class Conexao implements ConexaoInterface 
{
    
    private $host;
    private $dbname;
    private $user;
    private $password;
    
    public function __construct($host, $dbname, $user, $password) 
    {

        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    public function conectar() 
    {
            
        $db = new \PDO("mysql:host={$this->host};dbname={$this->dbname}",  $this->user,  $this->password);
        return $db;
    }
    
}
