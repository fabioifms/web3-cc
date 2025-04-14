<?php

require "src/conexao-bd.php";
require "src/Modelo/Livro.php";
require "src/Repositorio/LivroRepositorio.php";

$livroRepositorio = new LivroRepositorio($pdo);
$livroRepositorio->deletar($_POST['id']);

header("Location: admin.php");

?>