<?php
include ('usuarios.php');
require_once('dados/usuarioDAO.php');


$atributo1 = $_GET['nomeUsuario'];
$atributo2 = $_GET['emailUsuario'];
$atributo3 = md5($_GET['senhaUsuario']);
$atributo4 = $_GET['tipoUsuario'];

$usuario = new Usuario();
$usuario->setNomeUsuario($atributo1);
$usuario->setEmailUsuario($atributo2);
$usuario->setSenhaUsuario($atributo3);
$usuario->setTipoUsuario($atributo4);


$usuarioDao = new UsuarioDao();
$usuarioDao->createUsuario($usuario);

header('location:view/index.php');

?>