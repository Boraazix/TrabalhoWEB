<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Questão 3</title>
    <style>
        .correta {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Questão 3</h1>
    <?php
    if (isset($_GET['questao1']) && isset($_GET['questao2'])) {
        $respostas = array(
            'questao1' => $_GET['questao1'],
            'questao2' => $_GET['questao2']
        );
    }
    ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
    <ol type="A">
        <li><a class="correta" href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa1">Lorem ipsum dolor sit amet consectetur.</a><br>
        <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum.</a><br>
        <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a><br>
        <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, ipsum?</a><br>
        <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa5">Lorem ipsum dolor sit amet consectetur.</a><br>
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