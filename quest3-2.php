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
    <header>
        <hr>
        <h2>Desenvolvimento WEB</h2>
        <hr>
    </header>
    <main>
        <h1>Questionário</h1>
        <fieldset class="nobottom">
            <legend>Pergunta 2</legend>
<?php
            if (isset($_GET['questao1'])) {
                $respostas = array('questao1' => $_GET['questao1']);
            }
            ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
            <ol type="A">
                <li><a href="quest3-3.php?<?= http_build_query($respostas); ?>&questao2=alternativa1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil.</a></li>
                <li><a href="quest3-3.php?<?= http_build_query($respostas); ?>&questao2=alternativa2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                <li><a class="correta" href="quest3-3.php?<?php echo http_build_query($respostas); ?>&questao2=alternativa3">Lorem ipsum dolor sit amet consectetur.</a></li>
                <li><a href="quest3-3.php?<?= http_build_query($respostas); ?>&questao2=alternativa4">Lorem ipsum dolor sit amet.</a></li>
                <li><a href="quest3-3.php?<?= http_build_query($respostas); ?>&questao2=alternativa5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo.</a></li>
            </ol>
            <p id="cancel"><a href="quest3-1.php">Cancelar</a></p>
        </fieldset>

        <p id="back"><a href="./index.php">Página inicial</a></p>
    </main>
    <footer>
        <hr>
        <p>Russell Edward & Vitor Gabriel - &copy; 2023 - all rights reserved</p>
        <hr>
    </footer>
</body>

</html>