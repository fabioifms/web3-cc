<?php

class LivroRepositorio
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function referencialBibliografico(): array
    {
        $sql = "SELECT * FROM livros";
        $statement = $this->pdo->query($sql);
        $bibliografia = $statement->fetchAll(PDO::FETCH_ASSOC);

        /**
         * array_map: vai aplicar a função (call back com retorno) especificada para cada um dos elementos do array
         * 1o parâmetro: função call back. Seu parâmetro é cada array de $bibliografia
         * 2o parâmetro: array que será manipulado
         * retorno: array de objetos livros
         */
        $dadosLivro = array_map(function ($livro){
            return $this->formarObjeto($livro);
        },$bibliografia);

        return $dadosLivro;
    }

    private function formarObjeto($dados)
    {
        return new Livro($dados['id'],
            $dados['titulo'],
            $dados['autor'],
            $dados['descricao'],
            $dados['imagem']);
    }

    public function salvar(Livro $livro)
    {
        $sql = "INSERT INTO livros (titulo, autor, descricao, imagem) VALUES (?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $livro->getTitulo());
        $statement->bindValue(2, $livro->getAutor());
        $statement->bindValue(3, $livro->getDescricao());
        $statement->bindValue(4, $livro->getImagem());
        $statement->execute();
    }

    public function deletar(int $id)
    {
        $sql = "DELETE FROM livros WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
    }

    public function buscar(int $id)
    {
        $sql = "SELECT * FROM livros WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $dados = $statement->fetch(PDO::FETCH_ASSOC);

        return $this->formarObjeto($dados);
    }

    public function atualizar(Livro $livro)
    {
        $sql = "UPDATE livros SET autor = ?, titulo = ?, descricao = ?, imagem = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $livro->getAutor());
        $statement->bindValue(2, $livro->getTitulo());
        $statement->bindValue(3, $livro->getDescricao());
        $statement->bindValue(4, $livro->getImagem());
        $statement->bindValue(5, $livro->getId());
        $statement->execute();
    }

}