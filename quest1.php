<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <hr>
        <h2>Desenvolvimento WEB</h2>
        <hr>
    </header>
    <main>
        <h1>Questão 1</h1>
        <fieldset>
            <legend>Critérios de Geração</legend>
            <form action="#" method="get" id="main">
                <?php
                if (isset($_GET['qnt']))
                    $qnt = $_GET['qnt'];
                else
                    $qnt = '1';

                echo "<p>Quantidade de elementos <input type=\"number\" name=\"qnt\" min=\"1\" max=\"15\" value=\"$qnt\" required> (1 a 15)</p>";


                $checked = ['', '', '', '', '', ''];
                if (isset($_GET['op'])) {
                    switch ($_GET['op']) {
                        case 'text':
                            $checked[0] = 'checked';
                            break;
                        case 'password':
                            $checked[1] = 'checked';
                            break;
                        case 'button':
                            $checked[2] = 'checked';
                            break;
                        case 'radio':
                            $checked[3] = 'checked';
                            break;
                        case 'checkbox':
                            $checked[4] = 'checked';
                            break;
                        case 'range':
                            $checked[5] = 'checked';
                            break;
                        default:
                            break;
                    }
                }
                ?>

                <input type="radio" id="op1" name="op" value="text" <?= $checked[0] ?>><label for="op1">Texto</label><br>
                <input type="radio" id="op2" name="op" value="password" <?= $checked[1] ?>><label for="op2">Senha</label><br>
                <input type="radio" id="op3" name="op" value="button" <?= $checked[2] ?>><label for="op3">Botão</label><br>
                <input type="radio" id="op4" name="op" value="radio" <?= $checked[3] ?>><label for="op4">Rádio</label><br>
                <input type="radio" id="op5" name="op" value="checkbox" <?= $checked[4] ?>><label for="op5">Caixa de Seleção</label><br>
                <input type="radio" id="op6" name="op" value="range" <?= $checked[5] ?>><label for="op6">Faixa</label><br>
            </form>
            <script>
                const formulario = document.getElementById('main');
                const botoesRadio = formulario.querySelectorAll('input[type="radio"]');

                function enviarFormulario() {
                    formulario.submit();
                }

                botoesRadio.forEach(botao => {
                    botao.addEventListener('change', enviarFormulario);
                });
            </script>
        </fieldset>
        <div style="margin: 1rem 0;">
            <?php
            if (isset($_GET['qnt']) && isset($_GET['op'])) {
                $qnt = $_GET['qnt'];
                $op = $_GET['op'];
                switch ($op) {
                    case 'text':
                    case 'password':
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<input type=\"$op\" name=\"$op$i\" id=\"$op$i\"><br>\n";
                        }
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<pre><code>&lt;input type=\"$op\" name=\"$op$i\" id=\"$op$i\"&gt;&lt;br&gt;</code></pre>";
                        }
                        break;
                    case 'button':
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<input type=\"$op\" name=\"$op$i\" id=\"$op$i\" value=\"Botão $i\"><br>\n";
                        }
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<pre><code>&lt;input type=\"$op\" name=\"$op$i\" id=\"$op$i\" value=\"Botão $i\"&gt;&lt;br&gt;</code></pre>";
                        }
                        break;
                    case 'radio':
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<input type=\"$op\" name=\"{$op}A\" id=\"$op$i\" value=\"Radio$i\"><label for=\"$op$i\">Rádio $i</label><br>\n";
                        }
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<pre><code>&lt;input type=\"$op\" name=\"{$op}A\" id=\"$op$i\" value=\"Radio$i\"&gt;&lt;label for=\"$op$i\"&gt;Rádio $i&lt;/label&gt;&lt;br&gt;</code></pre>";
                        }
                        break;
                    case 'checkbox':
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<input type=\"$op\" name=\"$op$i\" id=\"$op$i\"><label for=\"$op$i\">Caixa de Seleção $i</label><br>\n";
                        }
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<pre><code>&lt;input type=\"$op\" name=\"$op$i\" id=\"$op$i\"&gt;&lt;label for=\"$op$i\"&gt;Caixa de Seleção $i&lt;/label&gt;&lt;br&gt;</code></pre>";
                        }
                        break;
                    case 'range':
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<input type=\"$op\" name=\"$op$i\" id=\"$op$i\" min=\"0\" max=\"100\" value=\"" . number_format($i / 15 * 100, 2) . "\"><label for=\"$op$i\">Faixa $i</label><br>\n";
                        }
                        for ($i = 1; $i <= $qnt; $i++) {
                            echo "<pre><code>&lt;input type=\"$op\" name=\"$op$i\" id=\"$op$i\" min=\"0\" max=\"100\" value=\"" . number_format($i / 15 * 100, 2) . "\"&gt;&lt;label for=\"$op$i\"&gt;Faixa $i&lt;/label&gt;&lt;br&gt;</code></pre>";
                        }
                        break;
                    default:
                        break;
                }
            }
            ?>
        </div>

        <p id="back"><a href="./index.php">Página inicial</a></p>

    </main>
    <footer>
        <hr>
        <p>Russell Edward - &copy; 2023 - all rights reserved</p>
        <hr>
    </footer>
</body>

</html>