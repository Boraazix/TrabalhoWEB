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
    <a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa1">Alternativa 1</a><br>
    <a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa2">Alternativa 2</a><br>
    <a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa3">Alternativa 3</a><br>
    <a class="correta" href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa4">Alternativa 4</a><br>
    <a href="resultados.php?<?php echo http_build_query($respostas); ?>&questao4=alternativa5">Alternativa 5</a><br>
    <a href="quest3.php">Cancelar</a>
</body>
<footer>
    <hr>
    <p>Russell Edward - &copy; 2023 - all rights reserved</p>
    <hr>
</footer>

</html>