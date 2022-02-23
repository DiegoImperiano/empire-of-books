<?php

class Livro{

	private $titulo;
	private $autor;
	private $editora;
	private $genero;
	private $paginas;
	private $arquivo;

	public function __construct(string $titulo, string $autor, string $editora, string $genero, int $paginas) {
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->editora = $editora;
		$this->genero = $genero;
		$this->paginas = $paginas;
	}
	public function getTitulo() : string{
		return $this->titulo;
	}
	public function setTitulo(string $newTitulo){
		$this->titulo = $newTitulo;
	}
	public function getAutor() : string{
		return $this->autor;
	}
	public function setAutor(string $newAutor){
		$this->autor  = $newAutor;
	}
	public function getEditora(){
		return $this->editora;
	}
	public function setEditora(string $newEditora){
		$this->editora = $newEditora;
	}
	public function getGenero(){
		return $this->genero;
	}
	public function setGenero(string $newGenero){
		$this->genero = $newGenero;
	}
	public function getPaginas() : int{
		return $this->paginas;
	}
	public function setPaginas(string $newPaginas){
		$this->paginas = $newPaginas;
	}
	public function getArquivo() {
		return $this->arquivo;
	}
    public function match($termo) : bool { 
        return $termo == $this->titulo || $termo == $this->autor;
    }
    public function detalhar() : void {
        echo ("Titulo: {$this->titulo}\n Autor: {$this->autor}\n Editora: {$this->editora}\n Genero: {$this->genero}\n Paginas: {$this->paginas}\n");
    }
    public function uparLivro($file) : bool {
    	if (explode('.', $file['name'])[1] != 'pdf')
    		return false;
    	$caminho = "pdfs/".md5(date('Y-m-d H:i:s')).".pdf";
    	move_uploaded_file($file['tmp_name'], $caminho);
    	$this->arquivo = $caminho;
    	return true;
    }
}