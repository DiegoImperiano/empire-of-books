<?php  

class Comentario {

    private $texto;

    public function __construct(string $texto) {
    
        $this->texto = $texto;   
    }
    public function getTexto() : string{
        return $this->texto;
    }

    public function detalhar() : void {
        echo ("Comentario: {$this->texto}\n");
    }
}

