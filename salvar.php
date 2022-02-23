<?php 
require_once('seguranca.php');

$leitor = unserialize($_SESSION['leitor']);
$biblioteca = Biblioteca::desserializar();
$l = $biblioteca->getLeitor($biblioteca->getLeitores(), $leitor->getLogin());
$l->adicionarComentario(new Comentario($_POST['texto']));

Biblioteca::serializar($biblioteca);
header("Location: /empire/index.php");
?>