<?php
require_once('../backend/seguranca.php');
$b = Biblioteca::desserializar();
$livros = [];

if (!isset($_POST['titulo']) || isset($_POST['titulo']) && $_POST['titulo'] == '') {
  foreach ($b->getLeitores() as $leitor) {
    foreach ($leitor->getLivros() as $livro) {
      array_push($livros, $livro);
    }
  }
} else {
  $livros = $b->buscarLivro($_POST['titulo']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Empire Of Books - Livros</title>
  <link rel="shortcut icon" href="../../ssets/images/icone.png">
  <!-- Icones das redes sociais -->
  <link rel="stylesheet" href="../../assets/fonts/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
  <div class="body">
    <header class="header">
      <nav class="container">
        <a class="logo logo-alt" href="index.php">Empire of <span>Books</span>.</a>
        <!-- MENU -->
        <div class="menu" id="navbarSupportedContent">
            <ul class="grid">
              <li id="inicio"><a class="title" href="index.php">Inicio</a></li>
              <li id="livros"><a class="title" href="listaDeLivros.php">Livros</a></li>
              <li id="leitores"><a class="title" href="listaDeLeitores.php">Leitores</a></li>
              <li id="doar"><a class="title" href="doarLivro.php">Doe um Livro</a></li>
              <li id="sobre"><a class="title" href="sobre.php">Sobre o Empire Of Books</a></li>
              <li id="sair"><a class="title" href="../backend/sair.php">Sair</a></li>
            </ul>
          </div>
          <!-- /MENU -->
          <div class="toggle icon-menu"></div>
          <div class="toggle icon-close"></div>
      </nav>
    </header>
    <div class="divider-1"></div>
    <div class="container pesquisa">
      <form action="../backend/listaDeLivros.php " method="post">
        <input type="search" id="titulo" name="titulo" placeholder="Qual o titulo do livro?">
        <button class="buscar" type="submit">Buscar</button>
      </form>
    </div>
    <main>
      <div class="container table">
      <h3 class="logo logo-alt">Livros Disponiveis</h3>
        <div class="container">
          <section class="table">
            <div class="grid">
              <?php
              foreach ($livros as $livro) {
              ?>
                <ul class="balloon">
                  <li>Título: <?= $livro->getTitulo() ?></li>
                  <li>Autor: <?= $livro->getAutor() ?></li>
                  <li>Editora: <?= $livro->getEditora() ?></li>
                  <li>Gênero: <?= $livro->getGenero() ?></li>
                  <li>Link: <a class="title" href="<?= $livro->getArquivo() ?>">Clique aqui</a></li>
                </ul>
              <?php
              }
              ?>
            </div>
          </section>
        </div>
      </div>
    </main>
    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="index.php">Empire of <span>Books</span>.</a>
          <p>©2022 Empire of Books.</p>
          <p>Todos os direitos reservados.</p>
        </div>

        <div class="social grid">
          <a href="https://instagram.com" target="_blank">
            <i class="icon-instagram"></i>
          </a>
          <a href="https://facebook.com" target="_blank">
            <i class="icon-facebook"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="icon-youtube"></i
          ></a>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>