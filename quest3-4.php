<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .correta {
            color: green
        }
    </style>
</head>

<body>
    <h1>Questão 4</h1>
    <?php
    if (isset($_GET['questao1']) && isset($_GET['questao2']) && isset($_GET['questao3'])) {
        $respostas = array(
            'questao1' => $_GET['questao1'],
            'questao2' => $_GET['questao2'],
            'questao3' => $_GET['questao3']
        );
    }
    ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
    <ol type="A">
        <li><a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, cumque.</a><br>
        <li><a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa2">Lorem ipsum dolor sit amet consectetur adipisicing.</a><br>
        <li><a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a><br>
        <li><a class="correta" href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa4">Lorem ipsum dolor sit.</a><br>
        <li><a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa5">Lorem ipsum dolor sit amet consectetur.</a><br>
    </ol>
    <a href="quest3.php">Cancelar</a><br>
    <a href="index.php">Página inicial</a>
</body>
<footer>
    <hr>
    <p>Russell Edward - &copy; 2023 - all rights reserved</p>
    <hr>
</footer>

</html>