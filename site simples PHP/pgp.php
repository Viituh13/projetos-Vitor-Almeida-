<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows.Com</title>
    <link rel="stylesheet" href="css/estilopgp.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <h1>Shows.Com</h1>
        <nav>
            <ul>
                <li><a href="pgp.php">Show</a></li>
                <li><a href="pgcon.php">Contato</a></li>
                <li><a href="pglog.php">Login</a></li>
                <li><a href="pgsob.php">Sobre</a></li>
                <li><a href="princi.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção de Shows -->
    <section class="tickets">
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
                "shows" => "Tardezinha",
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

        // Renderizar shows
        foreach (array_merge($ingressos, $ingre) as $ingresso) {
            echo "
            <div class='ticket-card'>
                <h2>{$ingresso['shows']}</h2>
                <p>Data: {$ingresso['data']}</p>
                <p>Local: {$ingresso['local']}</p>
                <p><strong>Preço:</strong> R$ {$ingresso['preco']}</p>
                <a href='pglog.php?show=" . urlencode($ingresso['shows']) . "'>
                    <button>Comprar Ingresso</button>
                </a>
            </div>";
        }
        ?>
    </section>

    <!-- Rodapé -->
    <footer class="footer">
        <p>© SHOWS.COM. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
