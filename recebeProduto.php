<?php
include ('produtos.php');
require_once ('dados/produtoDAO.php');

$atributo1 = $_GET['nomeProduto'];
$atributo2 = $_GET['valorProduto'];
$atributo3 = $_GET['dataValidade'];
$atributo4 = $_GET['infoProduto'];
$atributo5 = $_GET['fornecedorProduto'];
$atributo6 = $_GET['kcalProduto'];

$produto = new Produto();
$produto->setNomeProduto($atributo1);
$produto->setValorProduto($atributo2);
$produto->setValidadeProduto($atributo3);
$produto->setInfoProduto($atributo4);
$produto->setFornecedorProduto($atributo5);
$produto->setKcalProduto($atributo6);


$produtoDao = new ProdutoDao();
$produtoDao->create($produto);

header ('location:view/telaCadProduto.php');



?>