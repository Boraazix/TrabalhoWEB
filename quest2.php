<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9578d32024.js" crossorigin="anonymous"></script>
    <script src="code.js"></script>
</head>

<body>
    <header>
        <hr>
        <h2>Desenvolvimento WEB</h2>
        <hr>
    </header>
    <main>
        <h1>Mapa de índice de massa corporal</h1>
        <fieldset>
            <legend>Critérios de geração</legend>
            <form action="#" method="get">
<?php
                if (isset($_GET['p1']))
                    $peso[0] = $_GET['p1']+0;
                else
                    $peso[0] = '46';
                if (isset($_GET['p2']))
                    $peso[1] = $_GET['p2']+0;
                else
                    $peso[1] = '120';
                if (isset($_GET['h1']))
                    $altura[0] = $_GET['h1']+0;
                else
                    $altura[0] = '146';
                if (isset($_GET['h2']))
                    $altura[1] = $_GET['h2']+0;
                else
                    $altura[1] = '210';

                $str = "\t\t\t\t<label for=\"p1\">Peso: </label><input type=\"number\" id=\"p1\" name=\"p1\" min=\"40\" max=\"250\" required value=\"$peso[0]\">\n";
                $str .= "\t\t\t\t<label for=\"p2\">até </label><input type=\"number\" id=\"p2\" name=\"p2\" min=\"40\" max=\"250\" required value=\"$peso[1]\">\n";
                $str .= "\t\t\t\t<label for=\"p2\">kg (min.:40 max.:250)</label><br>\n";
                $str .= "\t\t\t\t<label for=\"p1\">Altura: </label><input type=\"number\" id=\"h1\" name=\"h1\" min=\"130\" max=\"300\" required value=\"$altura[0]\">\n";
                $str .= "\t\t\t\t<label for=\"p2\">até </label><input type=\"number\" id=\"h2\" name=\"h2\" min=\"130\" max=\"300\" required value=\"$altura[1]\">\n";
                $str .= "\t\t\t\t<label for=\"p2\">cm (min.:130 max.:300)</label><br>\n";
                echo $str;
                ?>
                <button type="submit">Gerar</button>
                <button type="button" onclick="defaultValues()">Valores padrão</button>
            </form>
        </fieldset><br>
        <table>
            <thead>
                <?php
                $str = "<tr>\n";
                $str .= "\t\t\t\t\t<th class=\"grandeza\">cm\kg</th>\n";
                for ($i = $peso[0]; $i <= $peso[1]; $i++) {
                    $str .= "\t\t\t\t\t<th><span>$i</span></th>\n";
                }
                echo $str . "\t\t\t\t</tr>\n";
                ?>
            </thead>
            <tbody>
                <?php
                for ($i = $altura[0]; $i <= $altura[1]; $i++) {
                    $str = "<tr>\n";
                    $str .= "\t\t\t\t\t<td><b>$i</b></td>\n";
                    for ($j = $peso[0]; $j <= $peso[1]; $j++) {
                        $imc = $j / (($i * $i) / 10000);
                        if (0 <= $imc && $imc < 16) {
                            $cor = 'baixomg';
                            $tipo = 'Baixo muito grave';
                        } elseif (16 <= $imc && $imc < 17) {
                            $cor = 'baixog';
                            $tipo = 'Baixo grave';
                        } elseif (17 <= $imc && $imc < 18.5) {
                            $cor = 'baixo';
                            $tipo = 'Baixo';
                        } elseif (18.5 <= $imc && $imc < 25) {
                            $cor = 'ideal';
                            $tipo = 'Ideal';
                        } elseif (25 <= $imc && $imc < 30) {
                            $cor = 'sobre';
                            $tipo = 'Sobrepeso';
                        } elseif (30 <= $imc && $imc < 35) {
                            $cor = 'ob1';
                            $tipo = 'Obesidade I';
                        } elseif (35 <= $imc && $imc < 40) {
                            $cor = 'ob2';
                            $tipo = 'Obesidade II';
                        } elseif ($imc >= 40) {
                            $cor = 'ob3';
                            $tipo = 'Obesidade III';
                        } else {
                            $cor = 'indefinida';
                        }

                        $str .= "\t\t\t\t\t<td><span title=\"$tipo&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\"><i class=\"$cor fa-solid fa-square fa-lg\"></i></span></td>\n";
                    }
                    $str .= "\t\t\t\t</tr>\n";
                    if ($i < $altura[1])
                        $str .= "\t\t\t\t";
                    echo $str;
                }
                ?>
            </tbody>
        </table>

        <p id="back"><a href="./index.php">Página inicial</a></p>

    </main>
    <footer>
        <hr>
        <p>Russell Edward & Vitor Gabriel - &copy; 2023 - all rights reserved</p>
        <hr>
    </footer>
</body>

</html>