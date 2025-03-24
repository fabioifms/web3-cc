<?php

require "src/conexao-bd.php";

$sql = "SELECT * FROM livros";

/**
 * Executa a query e retorna uma instância do banco de dados (statement) 
 **/
$statement = $pdo->query($sql);

/**
 * Retorna um item por vez. Útil qdo o retorno é muito grande
 */
/*while ($bibliografia = $statement->fetch(PDO::FETCH_ASSOC)){
    var_dump($bibliografia);
}
exit;*/

/**
 * Método fechAll recupera todos os resultados
 * Sem parâmetro, retorna duplicado em dois formatos
 */
$bibliografia = $statement->fetchAll();

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Bibliografia - Negritude</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/banner-negritude.jpg" class="logo" alt="logo-negritude">
            </div>
        </section>
        <h2>Negritude na música de Chico César e os contrapontos com a Indústria Cultural</h2>
        
        <section class="container-livros">
            <div class="container-livros-titulo">
                <h3>Bibliografia</h3>
                <img class= "ornaments" src="img/ornamento.png" alt="ornaments">
            </div>
            <div class="container-bibliografia">
            <?php foreach ($bibliografia as $livro):?>
                <div class="container-livro">
                    <div class="container-foto">
                        <img src="<?= $livro['imagem'] ?>">
                    </div>
                    <p><?= $livro['titulo'] ?></p>
                    <p><?= $livro['descricao'] ?></p>
                    <p><?= $livro['autor'] ?></p>
                </div>
            <?php endforeach ?>
            </div>
        </section>
    </main>
</body>
</html>