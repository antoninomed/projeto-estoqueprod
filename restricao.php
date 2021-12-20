<?php
include ("validacaoLogin.php");
include ("dados/conexao.php");


$email = $_SESSION['email'];


$comando = "select tipo from usuario where email='{$email}''";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();



?>