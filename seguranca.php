<?php

session_start();

require_once('Biblioteca.php');

if (!isset($_SESSION['leitor'])) {
    header('Location: /empire/login.php');
    return;
}