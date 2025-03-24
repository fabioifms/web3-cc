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

}