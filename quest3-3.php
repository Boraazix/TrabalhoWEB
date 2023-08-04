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
    <header>
        <hr>
        <h2>Desenvolvimento WEB</h2>
        <hr>
    </header>
    <main>
        <h1>Questionário</h1>
        <fieldset class="nobottom">
            <legend>Pergunta 3</legend>
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
                <li><a class="correta" href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa1">Lorem ipsum dolor sit amet consectetur.</a></li>
                <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum.</a></li>
                <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, ipsum?</a></li>
                <li><a href="quest3-4.php?<?php echo http_build_query($respostas); ?>&questao3=alternativa5">Lorem ipsum dolor sit amet consectetur.</a></li>
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