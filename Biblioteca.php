<?php
require_once("Leitor.php");
require_once("Livro.php");
class Biblioteca {

	private $leitores;
    
	public function __construct() {
		$this->leitores = array();     
	}
	public function getLeitores() : array {
    	return $this->leitores;
    }
	public function adicionarLeitor(Leitor $leitor) : void{
		array_push($this->leitores, $leitor);
	}
	public function removerLeitor(Leitor $leitor) : void {
        $indice = array_search($leitor, $this->leitores);
        array_splice($this->leitores, $indice, 1);
    }
    public function listarLivros() : void {
        foreach($this->livros as $livro) {
            $livro->detalhar();
        }
    }
    public function listarLeitores() : void {
        foreach($this->leitores as $leitor) {
            $leitor->detalhar();
        }
    }
    public function listarComentarios() : void {
        foreach($this->comentarios as $comentario) {
            $comentario->detalhar();
        }
    }
    public function buscarLivro(string $termo) : array {
        $livrosEncontrados = array();
        foreach($this->getLeitores() as $leitor){
            foreach ($leitor->getlivros() as $livro) {
                if($livro->match($termo)){
                    array_push($livrosEncontrados, $livro);
                }
            }
        }
        return $livrosEncontrados;
    }
    public function buscarLeitor(string $termo) : array {
        $leitoresEncontrados = array();
        foreach ($this->getLeitores() as $leitor) {
            if($leitor->match($termo)){
                array_push($leitoresEncontrados, $leitor);
            }
        }
        return $leitoresEncontrados;
    }
    public static function getLeitor($leitores, $login) : Leitor {
        $leitor = null;
        foreach ($leitores as $l) {
            if ($l->getLogin() == $login) {
                $leitor = $l;
                break;
            }
        }
        return $leitor;
    }
    public static function getComentario($comentarios, $login){
        $comentario = null;
        foreach ($comentarios as $key => $l) {
            if ($l->getLogin() == $login) {
                return $l;
            }
        }
        return $comentario;
    }


    public static function autenticar($login, $senha) {
        $biblioteca = Biblioteca::desserializar();
        $leitor = null;
        foreach ($biblioteca->getLeitores() as $l) {
            if ($l->getLogin() == $login && md5($senha) == $l->getSenha()) {
                $leitor = $l;
                break;
            }
        }
        return $leitor;
    }

    public static function salvar(Leitor $leitor) : bool {
        $leitores = Biblioteca::desserializar();
        $unico = true;
        foreach ($leitores as $l) {
            if ($l->getLogin() == $leitor->getLogin()) {
                $unico = false;
                break;
            }
        }
        if ($unico) {
            array_push($leitores, $leitor);
            Biblioteca::serializar($biblioteca);
        }
        return $unico;
    }
    public static function serializar(Biblioteca $biblioteca) : void {
        // begin serialização
        $file = fopen("biblioteca.data", "w");
        $content = serialize($biblioteca);
        fwrite($file, $content);
        fclose($file);
        // end
    }
    public static function desserializar() : Biblioteca {
        if (file_exists("biblioteca.data")) {
            // begin desserialização...
            $file = fopen("biblioteca.data", 'r');
            $content = fread($file, filesize("biblioteca.data"));
            $biblioteca = unserialize($content);
            fclose($file);
            return $biblioteca;
            // end
        } else {
            return new Biblioteca();
    	}
	}
}

