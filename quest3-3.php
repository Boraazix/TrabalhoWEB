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
    <a class="correta" href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa1">Alternativa 1</a><br>
    <a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa2">Alternativa 2</a><br>
    <a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa3">Alternativa 3</a><br>
    <a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa4">Alternativa 4</a><br>
    <a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa5">Alternativa 5</a><br>
    <a href="quest3.php">Cancelar</a>
</body>
<footer>
    <hr>
    <p>Russell Edward - &copy; 2023 - all rights reserved</p>
    <hr>
</footer>

</html>