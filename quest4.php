</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Investimentos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <hr>
        <h2>Desenvolvimento WEB</h2>
        <hr>
    </header>
    <main>
        <h1>Simulador de Investimentos Financeiros</h1>
        <fieldset class="">
            <legend>Critérios de geração</legend>
            <?php
            //conferindo valores recebidos no get, e setando defaults
            if (isset($_GET['aporte_inicial']) && ($_GET['aporte_inicial'] + 0) >= 0 && ($_GET['aporte_inicial'] + 0) < 1000000)
                $aporte_inicial = $_GET['aporte_inicial'] + 0;
            else
                $aporte_inicial = 500;
            if (isset($_GET['periodo']) && ($_GET['periodo'] + 0) >= 1 && ($_GET['periodo'] + 0) <= 480)
                $periodo = $_GET['periodo'] + 0;
            else
                $periodo = 12;
            if (isset($_GET['rendimento_mensal']) && ($_GET['rendimento_mensal'] + 0) >= 0 && ($_GET['rendimento_mensal'] + 0) <= 20)
                $rendimento_mensal = $_GET['rendimento_mensal'] + 0;
            else
                $rendimento_mensal = 0.7;
            if (isset($_GET['aporte_mensal']) && ($_GET['aporte_mensal'] + 0) >= 0 && ($_GET['aporte_mensal'] + 0) < 1000000)
                $aporte_mensal = $_GET['aporte_mensal'] + 0;
            else
                $aporte_mensal = 350;
            ?>
            <form style="margin-bottom: 0;" method="get" action="#">
                <label for="aporte_inicial">Aporte Inicial (R$)</label>
                <input type="number" step="0.01" name="aporte_inicial" min="0" max="999999.99" value="<?= $aporte_inicial ?>" required>
                <label for="aporte_inicial">[até R$ 999.999,99]</label><br>

                <label for="periodo">Período (meses)</label>
                <input type="number" name="periodo" min="1" max="480" value="<?= $periodo ?>" required>
                <label for="periodo">[1 a 480]</label><br>

                <label for="rendimento_mensal">Rendimento Mensal (%)</label>
                <input type="number" step="0.01" name="rendimento_mensal" min="0" max="20" value="<?= $rendimento_mensal ?>" required>
                <label for="rendimento_mensal">[até 20%]</label><br>

                <label for="">Aporte Mensal (R$)</label>
                <input type="number" step="0.01" name="aporte_mensal" min="0" max="999999.99" value="<?= $aporte_mensal ?>" required>
                <label for="aporte_mensal">[até R$ 999.999,99]</label><br>

                <input type="hidden" name=first_calc value="done">

                <button type="submit">Calcular</button>
            </form>

            <?php
            if (isset($_GET["first_calc"])) {

                function calcularRendimento($valor_inicial, $aporte_mensal, $rendimento_mensal)
                {
                    $rendimento = ($valor_inicial + $aporte_mensal) * ($rendimento_mensal / 100);
                    $total = $valor_inicial + $aporte_mensal + $rendimento;
                    return array($rendimento, $total);
                }

                $str = "<h2>Resultados:</h2>\n";
                $str .= "\t\t\t<table id=\"tabelasif\">\n";
                $str .= "\t\t\t\t<thead>\n\t\t\t\t\t<tr>\n\t\t\t\t\t\t<th>Mês</th>\n\t\t\t\t\t\t<th>Valor Inicial (R$)</th>\n\t\t\t\t\t\t<th>Aporte Mensal (R$)</th>\n\t\t\t\t\t\t<th>Rendimento (R$)</th>\n\t\t\t\t\t\t<th>Total (R$)</th>\n\t\t\t\t\t</tr>\n\t\t\t\t</thead>\n";

                $valor_inicial = $aporte_inicial;

                list($rendimento, $total) = calcularRendimento($valor_inicial, 0, $rendimento_mensal);

                $str .= "\t\t\t\t<tbody>\n\t\t\t\t\t<tr>\n";
                $str .= "\t\t\t\t\t\t<td>1</td>\n";
                $str .= "\t\t\t\t\t\t<td>R$ " . number_format($valor_inicial, 2, ",", ".") . "</td>\n";
                $str .= "\t\t\t\t\t\t<td>---</td>\n";
                $str .= "\t\t\t\t\t\t<td>R$ " . number_format($rendimento, 2, ",", ".") . "</td>\n";
                $str .= "\t\t\t\t\t\t<td>R$ " . number_format($total, 2, ",", ".") . "</td>\n";
                $str .= "\t\t\t\t\t</tr>\n";

                $valor_inicial = $total;

                for ($mes = 2; $mes <= $periodo; $mes++) {
                    list($rendimento, $total) = calcularRendimento($valor_inicial, $aporte_mensal, $rendimento_mensal);

                    $str .= "\t\t\t\t\t<tr>\n";
                    $str .= "\t\t\t\t\t\t<td>$mes</td>\n";
                    $str .= "\t\t\t\t\t\t<td>R$ " . number_format($valor_inicial, 2, ",", ".") . "</td>\n";
                    $str .= "\t\t\t\t\t\t<td>R$ " . number_format($aporte_mensal, 2, ",", ".") . "</td>\n";
                    $str .= "\t\t\t\t\t\t<td>R$ " . number_format($rendimento, 2, ",", ".") . "</td>\n";
                    $str .= "\t\t\t\t\t\t<td>R$ " . number_format($total, 2, ",", ".") . "</td>\n";
                    $str .= "\t\t\t\t\t</tr>\n";

                    $valor_inicial = $total;
                }

                $str .= "\t\t\t\t</tbody>\n\t\t\t</table>\n";
                echo $str;
            }
            ?>
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