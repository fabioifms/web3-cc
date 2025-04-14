<?php
require "src/conexao-bd.php";
require "src/Modelo/Livro.php";
require "src/Repositorio/LivroRepositorio.php";

$livroRepositorio = new LivroRepositorio($pdo);
$livros = $livroRepositorio->buscarTodos();
?>

<style>
    table{
        width: 90%;
        margin: auto 0;
    }
    table, th, td{
        border: 1px solid #000;
    }

    table th{
        padding: 11px 0 11px;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        padding: 8px;
    }

    table tr{
        border: 1px solid #000;
    }

    table td{
        font-size: 18px;
        padding: 8px;
    }
    .container-admin-banner h1{
        margin-top: 40px;
        font-size: 30px;
</style>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Autor</th>
        <th>Titulo</th>
        <th>Descrição</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($livros as $livro): ?>
        <tr>
            <td><?= $livro->getId() ?></td>
            <td><?= $livro->getAutor() ?></td>
            <td><?= $livro->getTitulo() ?></td>
            <td><?= $livro->getDescricao() ?></td>
        </tr>
    <?php endforeach; ?>


    </tbody>
</table>
