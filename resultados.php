</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Resultados</title>
</head>

<body>
    <h1>Resultados</h1>
    <?php
    $questoes = array(
        "questao1" => "alternativa2",
        "questao2" => "alternativa3",
        "questao3" => "alternativa1",
        "questao4" => "alternativa4"
    );

    $respostasUsuario = array();
    $numAcertos = 0;
    $numErros = 0;

    foreach ($questoes as $questao => $respostaCorreta) {
        if (isset($_GET[$questao])) {
            $respostaUsuario = $_GET[$questao];
            $respostasUsuario[$questao] = $respostaUsuario;

            if ($respostaUsuario === $respostaCorreta) {
                $numAcertos++;
            } else {
                $numErros++;
            }
        }
    }
    ?>

    <h2>Questões:</h2>
    <ul>
        <?php

        function numero(&$x)
        {
            $x = $x + 1;
            return $x;
        }

        foreach ($questoes as $questao => $respostaCorreta) {
            $questionNumber = numero($x);
            echo "<li>Questão $questionNumber: ";
            if (isset($respostasUsuario[$questao])) {
                if ($respostasUsuario[$questao] === $respostaCorreta) {
                    echo '<i class="material-symbols-outlined">done</i>';
                } else {
                    echo '<i class="material-symbols-outlined">close</i>';
                }
            } else {
                break;
            }
            echo "</li>";
        }
        ?>
    </ul>

    <p>Número de acertos: <?php echo $numAcertos; ?></p>
    <p>Número de erros: <?php echo $numErros; ?></p>
</body>
<footer>
    <hr>
    <p>Russell Edward - &copy; 2023 - all rights reserved</p>
    <hr>
</footer>

</html>