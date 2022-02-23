<?php
require_once('seguranca.php');
session_destroy();
header('Location: /empire/login.php');
?>