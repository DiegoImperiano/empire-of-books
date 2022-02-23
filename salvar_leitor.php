<?php  
error_reporting(E_ALL);
require_once('Biblioteca.php');
$biblioteca = Biblioteca::desserializar();


$biblioteca->adicionarLeitor(new Leitor($_POST['nome'], $_POST['endereco'], $_POST['email'],$_POST['telefone'], $_POST['login'], $_POST['senha']));
Biblioteca::serializar($biblioteca);
header("Location: /empire/login.php");