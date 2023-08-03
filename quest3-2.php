<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Questão 2</title>
    <style>
        .correta {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Questão 2</h1>
    <?php
    if (isset($_GET['questao1'])) {
        $respostas = array('questao1' => $_GET['questao1']);
    }
    ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
    <ol type="A">
        <li><a href="quest3-3.php?<?php echo http_build_query($respostas); ?>&questao2=alternativa1">Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Nihil.</a><br>
        <li><a href="quest3-3.php?<?php echo http_build_query($respostas); ?>&questao2=alternativa2">Lorem, ipsum dolor
                sit amet consectetur adipisicing elit.</a><br>
        <li><a class="correta" href="quest3-3.php?<?php echo http_build_query($respostas); ?>&questao2=alternativa3">Lorem ipsum dolor
                sit amet consectetur.</a><br>
        <li><a href="quest3-3.php?<?php echo http_build_query($respostas); ?>&questao2=alternativa4">Lorem ipsum dolor
                sit amet.</a><br>
        <li><a href="quest3-3.php?<?php echo http_build_query($respostas); ?>&questao2=alternativa5">Lorem ipsum, dolor
                sit amet consectetur adipisicing elit. Explicabo.</a><br>
    </ol>

    <br><a href="quest3.php">Cancelar</a><br>
    <a href="index.php">Página inicial</a>
</body>
<footer>
    <hr>
    <p>Russell Edward - &copy; 2023 - all rights reserved</p>
    <hr>
</footer>

</html>