<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9578d32024.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <hr>
        <h2>Desenvolvimento WEB</h2>
        <hr>
    </header>
    <main>
        <h1>Questão 2</h1>
        <?php
        $peso = [46, 120];
        $altura = [146, 210];
        ?>
        <table>
            <thead>
                <?php
                $str = "<tr>\n";
                $str .= "\t\t\t\t\t<th></th>\n";
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

                        $str .= "\t\t\t\t\t<td><span title=\"$tipo&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\"><i class=\"quadrado $cor fa-solid fa-square fa-lg\"></i></span></td>\n";
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
        <p>Russell Edward - &copy; 2023 - all rights reserved</p>
        <hr>
    </footer>
</body>

</html>