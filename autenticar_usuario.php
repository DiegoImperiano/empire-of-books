<?php
require_once('anonimo.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$leitor = Biblioteca::autenticar($login, $senha);

if ($leitor != null) {
    $_SESSION['leitor'] = serialize($leitor);
    header('Location: /empire/index.php');
    return;
}
header('Location: /empire/login.php');