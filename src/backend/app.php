<?php
require_once("biblioteca.php");

if (file_exists("biblioteca.data")) {
    // begin desserialização...
    $file = fopen("biblioteca.data", 'r');
    $content = fread($file, filesize("biblioteca.data"));
    $biblioteca = unserialize($content);
    fclose($file);
    // end
} else {
    $biblioteca = new Biblioteca();
}

$op = -1;
do {
    echo("Bem-vindo a sua biblioteca\t Escolha uma das opções:\n 0- Sair:\n 1- Adicionar leitor\n 2- Doar livro:\n 3- Remover livro:\n 4- Remover leitor:\n 5- Listar livros: \n 6- Listar leitores: \n 7- Pesquisar livro  \n 8- Pesquisar leitor: \n");
    $op = readline("");
    switch ($op) {

        case 1:   
            $nome = readline("Informe o nome \n");
            $endereco = readline("Informe o endereço \n");
            $email = readline("Informe o E-mail \n");
            $telefone = readline("Informe o Contato \n");
            $biblioteca->adicionarLeitor(new Leitor($nome, $endereco, $email, $telefone)) ."\n";
            break;

        case 2:
            $titulo = readline("Informe o titulo do livro \n");
            $autor = readline("Informe o autor do livro \n");
            $editora = readline("Informe a editora do livro \n");
            $genero = readline("Informe o genero do livro \n");
            $paginas = intval(readline("Informe o numero de páginas \n"));
            $biblioteca->adicionarLivro(new Livro($titulo, $autor, $editora,$genero, $paginas)). "\n";
            break;

        case 3:
            $biblioteca->listarLivros();
            $termo = readline("Informe titulo ou autor do livro a ser removido\n");
            $livros = $biblioteca->buscarLivro($termo);
            echo("Resultado da pesquisa \n---------\n");
            foreach ($livros as $livro) {
                $biblioteca->removerLivro($livro) ."\n";
            }
            break;
            
        case 4:
            $biblioteca->listarLeitores();
            $termo = readline("Informe nome ou email do leitor a ser removido \n");
            $leitores = $biblioteca->buscarLeitor($termo);
            echo("Resultado da pesquisa \n---------\n");
            foreach ($leitores as $leitor) {
                $biblioteca->removerLeitor($leitor). "\n";
            }

            break;
        case 5:
            $biblioteca->listarLivros();
            break;
        case 6:
            $biblioteca->listarLeitores();
            break;

        case 7:
            $termo = readline("Informe o titulo ou autor do livro para ser buscado \n");
            $livros = $biblioteca->buscarLivro($termo);
            echo("Resultado da pesquisa \n---------\n");
            foreach ($livros as $livro) {
                $livro->detalhar()."\n";
            }
            break;

        case 8:
            $termo = readline("Informe o nome ou email do leitor para ser buscado \n");
            $leitores = $biblioteca->buscarLeitor($termo);
            echo("Resultado da pesquisa \n---------\n");
            foreach ($leitores as $leitor) {
                $leitor->detalhar(). "\n";
            }
            break;

        case 9:   
            $texto = readline("comente:\n");
            $biblioteca->adicionarComentario(new Comentario($texto));
            break;

        case 10:
            $biblioteca->listarComentarios();
            break;
        case 0:
            echo("fim de programa \n");
            // begin serialização
            $file = fopen("biblioteca.data", "w");
            $content = serialize($biblioteca);
            fwrite($file, $content);
            fclose($file);
            // end
            return;
            break;
        case 11:
            echo("fim de programa \n");
            // begin serialização
            $file = fopen("comentario.data", "w");
            $content = serialize($comentario);
            fwrite($file, $content);
            fclose($file);
            // end
            return;
            break;
            
        default:
            echo("Escolha uma opção válida.\n");
            break;
    }
} while($op!=0);
