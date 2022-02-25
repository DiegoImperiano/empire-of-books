<?php 
require_once('seguranca.php');

$leitor = unserialize($_SESSION['leitor']);
$biblioteca = Biblioteca::desserializar();

$l = $biblioteca->getLeitor($biblioteca->getLeitores(), $leitor->getLogin());
$livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['editora'],$_POST['genero'], $_POST['paginas']);
if ($livro->uparLivro($_FILES['arquivo'])) {
	$l->adicionarLivro($livro);
	Biblioteca::serializar($biblioteca);
	// mensagem de sucesso;
} else {
	// mensagem de erro;
}
header("Location: ../frontend/doarLivro.php");
?>