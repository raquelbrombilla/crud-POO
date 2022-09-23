<?php

require_once "vendor/autoload.php";

$produto = new \App\Model\Produto();

// setar os atributos

// $produto->setId(2);
// $produto->setNome("Teste de cadastro");
// $produto->setDescricao("Descrição");

$produtoDao = new \App\Model\ProdutoDao();
// $produtoDao->create($produto); 
// $produtoDao->update($produto);
// $produtoDao->delete($produto->getId());

foreach($produtoDao->read() as $produto){
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
}
