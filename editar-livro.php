<?php
  require "src/conexao-bd.php";
  require "src/Modelo/Livro.php";
  require "src/Repositorio/LivroRepositorio.php";

  $livroRepositorio = new LivroRepositorio($pdo);


  if (isset($_POST['editar'])){
    $livro = new Livro($_POST['id'],
                       $_POST['titulo'], 
                       $_POST['autor'], 
                       $_POST['descricao']);

    if (isset($_FILES['imagem'])){
      $livro->setImagem(uniqid() . $_FILES['imagem']['name']);
      move_uploaded_file($_FILES['imagem']['tmp_name'], $livro->getImagemDiretorio());
    }

    $livroRepositorio->atualizar($livro);
    header("Location: admin.php");
  }
  else{
    $livro = $livroRepositorio->buscar($_GET['id']);
  }
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
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="img/icone.jpg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Negritude - Editar Livro</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/banner-negritude.jpg" class="logo-admin" alt="logo-negritude">
    <h1>Editar Livro</h1>
    <img class= "ornaments" src="img/ornamento.png" alt="ornaments">
  </section>
  <section class="container-form">
    <form action="editar-livro.php" method="post" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?= $livro->getId()?>">
      <label for="nome">Título</label>
      <input type="text" id="titulo" name="titulo" value="<?= $livro->getTitulo()?>"  placeholder="Digite o título do livro" required>
      <label for="autor">Autor</label>
      <input type="text" id="autor" name="autor" value="<?= $livro->getAutor()?>" placeholder="Digite o autor" required>
      <label for="descricao">Descrição</label>
      <input type="text" id="descricao" name="descricao" value="<?= $livro->getDescricao()?>" placeholder="Digite uma descrição" required>
      <label for="imagem">Envie uma imagem do livro</label>
      <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

      <input type="submit" name="editar" class="botao-cadastrar"  value="Editar livro"/>
    </form>

  </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>