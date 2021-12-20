<?php 
include ('produtos.php');
require_once ('dados/produtoDAO.php');
session_start();

$id_upd =  $_SESSION['atributoID'];
$atributo1 = $_GET['nomeProduto'];
$atributo2 = $_GET['valorProduto'];
$atributo3 = $_GET['dataValidade'];
$atributo4 = $_GET['infoProduto'];
$atributo5 = $_GET['fornecedorProduto'];
$atributo6 = $_GET['kcalProduto'];

$comando = "update produto set nome_produto= '{$atributo1}', valor_produto='{$atributo2}', 
validade_produto='{$atributo3}', info_produto='{$atributo4}', fornecedor='{$atributo5}', kcal='{$atributo6}' where id='{$id_upd}' ;";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();

header("location:view/listaProdutos.php");

?>

