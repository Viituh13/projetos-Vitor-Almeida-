<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows.Com</title>
    <link rel="stylesheet" href="estilopgp.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <h1>Shows.Com</h1>
        <nav>
            <ul>
                <li><a href="pgp.php">Home</a></li>
                <li><a href="pgcon.php">Contato</a></li>
                <li><a href="pglog.php">Login</a></li>
                <li><a href="pgsob.php">Sobre</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção de Shows -->
    <table align="center" border="0" cellpadding="10">
        <tbody>
            <?php
            // Array com os shows
            $ingressos = [
                [
                    "shows" => "RockDanger na Casa",
                    "data" => "20 de Fevereiro, 2025",
                    "local" => "Estádio Nacional",
                    "preco" => 120
                ],
                [
                    "shows" => "Tardizinha",
                    "data" => "22 de Outubro, 2025",
                    "local" => "Arena Central",
                    "preco" => 150
                ]
            ];

            $ingre = [
                [
                    "shows" => "Cris Brown",
                    "data" => "22 de Outubro, 2025",
                    "local" => "Arena Central",
                    "preco" => 175
                ],
                [
                    "shows" => "P. DIDDY",
                    "data" => "22 de Outubro, 2025",
                    "local" => "Arena BANGU 2",
                    "preco" => 250
                ]
            ];

            // Primeira linha com os dois primeiros shows
            echo "<tr>";
            foreach ($ingressos as $ingresso) {
                echo "
                <td>
                    <h2>{$ingresso['shows']}</h2>
                    <p>Data: {$ingresso['data']}</p>
                    <p>Local: {$ingresso['local']}</p>
                    <p><strong>Preço:</strong> R$ {$ingresso['preco']}</p>
                     <a href='pglog.php" . urlencode($ingresso['shows']) . "'>
            <button>Comprar Ingresso</button>
        </a>
                </td>";
            }
            echo "</tr>";

            // Segunda linha com os próximos dois shows
            echo "<tr>";
            foreach ($ingre as $ingresso) {
                echo "
                <td>
                    <h2>{$ingresso['shows']}</h2>
                    <p>Data: {$ingresso['data']}</p>
                    <p>Local: {$ingresso['local']}</p>
                    <p><strong>Preço:</strong> R$ {$ingresso['preco']}</p>
                     <a href='pglog.php" . urlencode($ingresso['shows']) . "'>
            <button>Comprar Ingresso</button>
        </a>
                </td>";
            }
            echo "</tr>";
            ?>
        </tbody>
    </table>

    <!-- Rodapé -->
    <footer class="footer">
        <p>© 2024 Futebol Ingressos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
