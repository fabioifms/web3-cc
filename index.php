<?php

$bibliografia = [
    [
        'imagem' => 'img/pelenegra.jpg',
        'titulo' => 'Pele negra máscaras brancas',
        'descrição' => 'Neste livro, Fanon examina a negação do racismo contra o negro na França. É um clássico do pensamento sobre a diáspora africana, sobre a descolonização, a arquitetura psicológica, a teoria das ciências, a filosofia e a literatura caribenha. Analisa o axioma que causou grande turbulência nas décadas de 1960 e 1970: como a ideologia que ignora a cor pode apoiar o racismo que nega. Sua primeira edição, em português, foi publicada em 1963.',
        'autor' => 'Frantz Fanon' 
    ],
    [
        'imagem' => 'img/razaonegra.jpg',
        'titulo' => 'Crítica da razão negra',
        'descrição' => 'De todos os humanos, o negro é o único cuja carne foi convertida em mercadoria. Aliás, negro e raça têm sido sinônimos no imaginário das sociedades europeias. Desde o século XVIII, constituíram ambos o subsolo inconfesso e muitas vezes negado a partir do qual se difundiu o projeto moderno de conhecimento - e também de governo. Será possível que a relegação da Europa à categoria de mera província do mundo acarretará a extinção do racismo, com a dissolução de um de seus mais cruciais significantes, o negro? Ou, pelo contrário, uma vez desmantelada essa figura histórica, todos nós nos tornaremos os negros do novo racismo fabricado em escala global pelas políticas neoliberais e securitárias, pelas novas guerras de ocupação e predação e pelas práticas de zoneamento? Neste ensaio ao mesmo tempo erudito e iconoclasta, Achille Mbembe empreende uma reflexão crítica indispensável para responder à principal questão sobre o mundo contemporâneo: como pensar a diferença e a vida, o semelhante e o dessemelhante?',
        'autor' => 'Achille Mbembe' 
    ],
    [
        'imagem' => 'img/capitalismodebate.jpg',
        'titulo' => 'Capitalismo em Debate: uma Conversa na Teoria Crítica',
        'descrição' => 'Capitalismo em debate faz ao leitor o irrecusável convite de se juntar a uma conversa entre Nancy Fraser e Rahel Jaeggi. Construída de modo não ortodoxo, a obra se apresenta como um verdadeiro debate entre as filósofas em torno do contexto atual do capitalismo, levando em conta problemas econômicos, sociais, políticos e ambientais. Estruturada em quatro capítulos – “Conceitualizando o capitalismo”, “Historicizando o capitalismo”, “Criticando o capitalismo” e, finalmente, “Contestando o capitalismo” –, essa conversa na teoria crítica induz o leitor a refletir sobre o que define o capitalismo, sobre as transformações e as permanências desse modelo ao logo da história, sobre como criticá-lo e como se contrapor a ele. Ao abordar temas de tamanha complexidade de forma acessível, sem abrir mão do rigor conceitual, Nancy Fraser e Rahel Jaeggi permitem-se aprofundamentos teóricos e críticos ao mesmo tempo que se abrem a novos públicos. Capitalismo em debate é uma obra essencial para tempos que, cada vez mais, demandam uma transposição do conhecimento teórico para além dos moldes acadêmicos tradicionais em busca de chaves de compreensão e intervenção na contemporaneidade.',
        'autor' => 'Nancy & Rahel Jaeggi' 
    ],
    [
        'imagem' => 'img/industruacultural.jpg',
        'titulo' => 'Indústria cultural',
        'descrição' => 'Este volume apresenta ao público brasileiro uma antologia de importantes textos de Theodor Adorno sobre “Indústria Cultural”, conceito estabelecido por ele e Max Horkheimer na década de 1940. Os nove ensaios que compõem esta coletânea abordam criticamente questões de várias artes e áreas do conhecimento (música, rádio, cinema, literatura, política, sociologia e filosofia), possibilitando uma compreensão abrangente da evolução histórica de um dos temas centrais da reflexão adorniana.',
        'autor' => 'Theodor W. Adorno' 
    ]
    ];

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
                    <p><?= $livro['descrição'] ?></p>
                    <p><?= $livro['autor'] ?></p>
                </div>
            <?php endforeach ?>
            </div>
        </section>
    </main>
</body>
</html>