<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Questionário</title>
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
            <legend>Pergunta 1</legend>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
            <ol type="A">
                <li><a href="quest3-2.php?questao1=alternativa1">Lorem, ipsum.</a><br>
                <li><a class="correta" href="quest3-2.php?questao1=alternativa2">Lorem ipsum dolor sit.</a><br>
                <li><a href="quest3-2.php?questao1=alternativa3">Lorem ipsum dolor sit amet.</a><br>
                <li><a href="quest3-2.php?questao1=alternativa4">Lorem ipsum dolor sit amet consectetur.</a><br>
                <li><a href="quest3-2.php?questao1=alternativa5">Lorem ipsum dolor sit amet consectetur adipisicing.</a><br>
            </ol>
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