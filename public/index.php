<?php
/* Curso DI_Service_Container */

require_once '../vendor/autoload.php';
require_once 'config.php';
require_once 'services.php';

$produto = $container['produto'];
$fornecedor = $container['fornecedor'];

//print_r($fornecedor);
//echo '<br />';

//print_r($produto);
//echo '<br />';

$listaProduto = $produto->listar();

//var_dump($listaProduto);
//die;

foreach ($listaProduto as $key => $produto){
   
    $listaFornecedor = $fornecedor->listar($produto['fk_id_fornecedor']);
    $listaProduto[$key]['fornecedor'] = $listaFornecedor[0]['nome'];
    
}


require_once 'template.produto.listar.phtml';
//$fornecedor = 

/*require_once 'Conexao.php';
require_once 'Produto.php';
require_once 'Fornecedor.php';

$conexao = new Conexao('localhost', 'code.educacion_diservice', 'curso', 'code.edu');

$fornecedor = new Fornecedor($conexao);
$produto = new Produto($conexao);


$listaProduto = $produto->listar();

foreach ($listaProduto as $key => $produto){
   
    $listaFornecedor = $fornecedor->listar($produto['fk_id_fornecedor']);
    $listaProduto[$key]['fornecedor'] = $listaFornecedor[0]['nome'];
    
}

//$listaFornecedor = $fornecedor->listar(2);
        require_once 'template.produto.listar.phtml';
//require_once 'template.fornecedor.listar.phtml';

*/
