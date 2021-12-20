<?php 
require_once ('dados/conexao.php');
session_start();

$_SESSION['logged']=False;
echo $_SESSION['logged'];

$email = strtolower($_GET['email']);//retorna string em minúscula
$senha = md5($_GET['senha']);

$comando = "select *from usuario where email='{$email}' and senha='{$senha}'";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();

if ($preparacao->rowCount() > 0){
	$_SESSION['email'] = $email;
	header('location:view/telaCadProduto.php');	
	exit();
	
}else {
	$_SESSION['notLogged'] = true;
	header('location:view/index.php');
	exit();
}
?>