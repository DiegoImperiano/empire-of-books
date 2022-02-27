<?php
require_once('../backend/seguranca.php');
$b = Biblioteca::desserializar();
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Empire Of Books - Inicio</title>
    <link rel="shortcut icon" href="../../assets/images/icone.png">
    <!-- Icones das redes sociais -->
    <link rel="stylesheet" href="../../assets/fonts/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/style.css">
  </head>

  <body>
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
      <main class="inicio" id="inicio">
        <div class="container">
          <div class="introduction">
            <span class="salutation">
              Olá, <?= unserialize($_SESSION['leitor'])->getNome() ?> !!! <br>
              Seja muito bem vindo ao Empire of books, sua biblioteca virtual. 
              Ajude-nos a deixar a biblioteca mais completa fazendo uploads de seus livros digitais para que outros usuarios possam ler. Aproveite também para deixar seu comentário! XD
            </span>
            <form class="comment" action="../backend/salvar.php" method="POST">
              <h4> Deixe seu feedback <span class="little">(max 150 char)<span> </h4> <br>
              <textarea placeholder=" Digite aqui" maxlength="150" name="texto" id="texto"></textarea>
              <button class="send" type="submit">Comente</button>
            </form>
          </div>
          <div>
            <section class="section" id="testimonials">
              <div class="container">
                <header>
                  <h2 class="title">Depoimentos de quem já passou por aqui</h2>
                </header>
                <div class="testimonials swiper-container">
                  <div class="swiper-wrapper">
                    <?php
                      foreach ($b->getLeitores() as $leitor) {
                        foreach ($leitor->getComentarios() as $comentario) { ?>
                          <div class="testimonial swiper-slide">
                            <blockquote>
                              <p>
                                <span>&ldquo;</span>
                                <?= $comentario->getTexto() ?> </p>
                              </p>
                              <cite>
                                <?= $leitor->getNome() ?>
                              </cite>
                            </blockquote>
                          </div>
                        <?php   
                      }
                    } ?>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
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
    
    <!-- <a href="#inicio" class="back-to-top"><i class="icon-arrow-up"></i></a> -->

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main.js -->
    <script src="main.js"></script>
    
  </body>

</html>
