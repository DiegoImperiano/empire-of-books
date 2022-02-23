<?php
require_once('anonimo.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar_senha'];

if ($senha == $confirmarSenha) {
	$biblioteca = Biblioteca::desserializar();
    $leitor = new Leitor($nome, $endereco, $email, $telefone, $login, md5($senha));
    $biblioteca->adicionarLeitor($leitor);
    Biblioteca::serializar($biblioteca);    
    header('Location: /empire/login.php');
    return;
}
header('Location: /empire/registrar.php');