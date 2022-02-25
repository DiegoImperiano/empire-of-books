<?php
require_once('../backend/seguranca.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Empire Of Books - Doar Livro</title>
    <link rel="shortcut icon" href="../../assets/images/icone.png">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
  </head>
  <body id="semtabela">
    <!-- Barra de navegação-->
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
      <main>
        <div class="container table doar">
          <div class="introduction doar">
            <h3 class="logo doar">Faça um upload  </h3>
            <img src="../../assets/images/doarLivro.svg" alt="">
          </div>
          <div class="card-body">
            <form action="../backend/salvaLivro.php" method="POST" enctype="multipart/form-data">
              <fieldset>
              <legend>Informações do livro</legend>
                <div class="form-group input">
                  <label for="titulo">Titulo</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required="required" placeholder="Informe o titulo do livro">
                </div>
                <div class="form-group input">
                  <label for="autor">Autor</label>
                  <input type="text" class="form-control" name="autor" id="autor" required="required" placeholder="Informe o autor do livro">
                </div>
                <div class="form-group input">
                  <label for="editora">Editora</label>
                  <input type="text" class="form-control" name="editora" id="editora" required="required" placeholder="Informe a editora do livro">
                </div>
                <div class="form-group input">
                  <label for="genero">Gênero</label>
                  <input type="text" class="form-control" name="genero" id="genero" required="required" placeholder="Informe o gênero do livro">
                </div>
                <div class="form-group input">
                  <label for="paginas">N° de Pag.</label>
                  <input type="number" class="form-control" name="paginas" id="paginas" required="required" placeholder="Informe a quantidade de páginas do livro">
                </div>
                <div class="form-group input arquivo">
                  <label for="arquivo">PDF</label>
                  <input type="file" class="form-control" name="arquivo" id="arquivo" required="required">
                  <div>
                  <button type="submit" class="buscar button">Up</button>
                </div>
                </div>
                
              </fieldset>
            </form>
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

<!--
  <form name="form" method="post" action="envia_pdf.php" enctype="multipart/form-data">
    <fieldset class="infraFieldset">
    <legend class="infraLegend">Enviar Arquivos</legend>
    <label id="lblArquivo" for="txtArquivo" class="infraLabelObrigatorio">Documento:</label>
    <input type="file" id="txtArquivo" name="txtArquivo" value="" />
    <button type="submit" accesskey="S" name="sbmSalvar" class="btn btn-success">Doar</button>
  </form>
-->