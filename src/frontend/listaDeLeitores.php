<?php
require_once('../backend/seguranca.php');
$b = Biblioteca::desserializar();
$leitores = [];

if (!isset($_POST['nome']) || isset($_POST['nome']) && $_POST['nome'] == '') {
  foreach ($b->getLeitores() as $leitor) {
    array_push($leitores, $leitor);
  }
} else {
  $leitores = $b->buscarLeitor($_POST['nome']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Empire Of Books - Leitores</title>
  <link rel="shortcut icon" href="../../assets/images/icone.png">
  <!-- Icones das redes sociais -->
  <link rel="stylesheet" href="../../assets/fonts/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body >
  <div class="body">
    <header id="header" class="header">
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
    <main id="livros" class="livros">
      <div class="container table">
        <div class="pesquisa">
            <h3 class="logo logo-alt">Leitores</h3>
        </div>
        <div class="container ">
          <section class="table">
            <div class="grid">
              <?php foreach ($leitores as $leitor) { ?>
                <ul class="balloon">
                  <li>Nome: <?= $leitor->getNome('nome') ?></li>
                  <li>Endereço: <?= $leitor->getEndereco('endereco') ?></li>
                  <li>Email: <?= $leitor->getEmail('email') ?></li>
                  <li>Telefone: <?= $leitor->getTelefone('telefone') ?></li>
                </ul>
              <?php } ?>
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
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- scrollreveal -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- main.js -->
  <script src="main.js"></script>
</body>

</html>