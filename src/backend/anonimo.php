<?php

session_start();

require_once('biblioteca.php');

if (isset($_SESSION['leitor'])) {
    header('Location: ../frontend/index.php');
    return;
}