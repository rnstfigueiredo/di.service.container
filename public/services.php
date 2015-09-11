<?php
// isto so funciona na versao 1 do pimple
// aparentemente nem a classe pimple nao existe mais no relise atual
// existe um classe conteiner ??????

//usando esta forma ele vai instaciar um objeto para cada chamada
/*$container['datahora'] = function() {
    return new \DateTime;  
};*/

// neste modelo eh instanciado somente um objeto quando da realiação
//da chamada e o mesmo eh compartilhado
/*$container['conexao'] =  $container->share(function(){
    return new \rnst\Conexao('localhost', 'code.educacion_diservice', 'curso', 'code.edu');  
});*/

$container['conexao'] = $container->share(function (\Pimple $container){
    return new \rnst\Conexao($container['host'], $container['dbname'], $container['user'], $container['password']);
});

$container['produto'] = $container->share(function (\Pimple $container){
    return new \rnst\Produto($container['conexao']);    
});

$container['fornecedor'] = $container->share(function (\Pimple $container){
    return new \rnst\Fornecedor($container['conexao']);   
});
