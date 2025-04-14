<?php

require "src/conexao-bd.php";
require "src/Modelo/Livro.php";
require "src/Repositorio/LivroRepositorio.php";

$dadosLivros = new LivroRepositorio($pdo);
$bibliografia = $dadosLivros->referencialBibliografico();

?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="img/icone.jpg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Negritude - Admin</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/banner-negritude.jpg" class="logo-admin" alt="logo-negritude">
    <h1>Admistração Bibliografia Negritude</h1>
    <img class= "ornaments" src="img/ornamento.png" alt="ornaments">
  </section>
  <h2>Lista de livros</h2>

  <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Livro</th>
          <th>Autor</th>
          <th>Descricão</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach ($bibliografia as $livro):?>
      <tr>
        <td><?= $livro->getTitulo() ?></td>
        <td><?= $livro->getAutor() ?></td>
        <td><?= $livro->getDescricao() ?></td>
        <td><a class="botao-editar" href="editar-livro.php?id=<?= $livro->getId() ?>">Editar</a></td>
        <td>
          <form action="excluir-livro.php" method="post">
            <input type="hidden" name="id" value="<?= $livro->getId() ?>">  
            <input type="submit" class="botao-excluir" value="Excluir">
          </form>
        </td>        
      </tr>
      <?php endforeach ?>
      
      </tbody>
    </table>
  <a class="botao-cadastrar" href="cadastrar-livro.php">Cadastrar livro</a>
  <form action="gerador-pdf.php" method="post">
    <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
  </form>
  </section>
</main>
</body>
</html>