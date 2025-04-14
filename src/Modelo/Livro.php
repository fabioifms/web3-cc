<?php

class Livro
{
    private ?int $id;
    private string $titulo;
    private string $autor;
    private string $descricao;
    private string $imagem;

    public function __construct(?int $id, string $titulo, string $autor, string $descricao, string $imagem = "banner-negritude.jpg")
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function getTitulo(): string
    {
        return $this->titulo;
    }


    public function getAutor(): string
    {
        return $this->autor;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }



    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getImagemDiretorio(): string
    {
        return "img/".$this->imagem;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

}

?>