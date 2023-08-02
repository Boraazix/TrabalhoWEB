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
    <h1>Simulador de Investimentos Financeiros</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="aporte_inicial">Aporte Inicial (R$)</label>
        <input type="number" step="0.01" name="aporte_inicial" min="0" max="999999.99" required><br>

        <label for="periodo">Período (meses)</label>
        <input type="number" name="periodo" min="1" max="480" required><br>

        <label for="rendimento_mensal">Rendimento Mensal (%)</label>
        <input type="number" step="0.01" name="rendimento_mensal" min="0" max="20" required><br>

        <label for="aporte_mensal">Aporte Mensal (R$)</label>
        <input type="number" step="0.01" name="aporte_mensal" min="0" max="999999.99" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aporte_inicial = $_POST["aporte_inicial"];
        $periodo = $_POST["periodo"];
        $rendimento_mensal = $_POST["rendimento_mensal"];
        $aporte_mensal = $_POST["aporte_mensal"];

        function calcularRendimento($valor_inicial, $aporte_mensal, $rendimento_mensal)
        {
            $rendimento = ($valor_inicial + $aporte_mensal) * ($rendimento_mensal / 100);
            $total = $valor_inicial + $aporte_mensal + $rendimento;
            return array($rendimento, $total);
        }

        echo "<h2>Resultados:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Mês</th><th>Valor Inicial</th><th>Aporte Mensal</th><th>Rendimento</th><th>Total</th></tr>";

        $valor_inicial = $aporte_inicial;
        for ($mes = 1; $mes <= $periodo; $mes++) {
            list($rendimento, $total) = calcularRendimento($valor_inicial, $aporte_mensal, $rendimento_mensal);

            echo "<tr>";
            echo "<td>$mes</td>";
            echo "<td>R$ " . number_format($valor_inicial, 2, ",", ".") . "</td>";
            echo "<td>R$ " . number_format($aporte_mensal, 2, ",", ".") . "</td>";
            echo "<td>R$ " . number_format($rendimento, 2, ",", ".") . "</td>";
            echo "<td>R$ " . number_format($total, 2, ",", ".") . "</td>";
            echo "</tr>";

            $valor_inicial = $total;
        }

        echo "</table>";
    }
    ?>
</body>
<footer>
    <hr>
    <p>Russell Edward - &copy; 2023 - all rights reserved</p>
    <hr>
</footer>

</html>