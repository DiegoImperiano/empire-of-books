<?php
require_once("comentario.php");

class Leitor{
	private $nome;
	private $endereco;
	private $email;
	private $telefone;
	private $login;
  private $senha;
	private $livros;
  private $comentarios;
	public function __construct(string $nome, string $endereco, string $email, string $telefone, string $login, string $senha){
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->login = $login;
		$this->senha = $senha;
		$this->livros = array();
		$this->comentarios = array();
	}
	public function getNome() : string{
		return $this->nome;
	}
	public function setNome(string $newNome){
		$this->nome = $newNome;
	}
	public function getEmail() : string{
		return $this->email;
	}
	public function setEmail(string $newEmail){
		$this->email = $newEmail;
	}
	public function getEndereco() : string {
		return $this->endereco;
	}
	public function setEndereco(string $newEndereco){
		$this->endereco = $newEndereco;
	}
	public function getTelefone() : string {
		return $this->telefone;
	}
	public function setTelefone(string $newTelefone){
		$this->telefone = $newTelefone;
	}
     public function getLogin() : string {
        return $this->login;
    }
    public function getSenha() : string {
        return $this->senha;
    }
    public function getLivros() : array {
    	return $this->livros;
    }
	public function adicionarLivro(Livro $livro) : void{
		array_push($this->livros, $livro);
	}

    public function removerLivro(Livro $livro) : void {
        $indice = array_search($livro, $this->livros);
        array_splice($this->livros, $indice, 1);
    }
    public function adicionarComentario(Comentario $comentario) : void{
        array_push($this->comentarios, $comentario);
    }
    public function getComentarios() : array {
        return $this->comentarios;
    }

    public function match($termo) : bool { 
        return $termo == $this->nome || $termo == $this->email;
    }
    public function detalhar() : void {
        echo (" Nome: {$this->nome}\n Endereço: {$this->endereco}\n E-mail: {$this->email}\n Telefone: {$this->telefone}\n");
    }
}
