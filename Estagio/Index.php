<?php

require_once 'Produto.php';
require_once 'Venda.php';

// Exemplo de uso
$produto = new Produto();
$produto->setProduto(['nome' => 'Feijão', 'preco' => 8, 'quantidade' => 50]);

$venda = new Venda();
$venda->setVenda(10, 2); // Vender 10 unidades com 2% de desconto
$venda->getVenda();
