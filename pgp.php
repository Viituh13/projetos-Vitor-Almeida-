<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Venda de Ingressos de Futebol</title>
  <link rel="stylesheet" href="estilopgp.css">
</head>
<body>
  <!-- Cabeçalho -->
  <header class="header">
    <h1>Ingressos</h1>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#games">Jogos</a></li>
        <li><a href="#contact">Contato</a></li>
      </ul>
    </nav>
  </header>

  <!-- Seção de Jogos -->
  <div class="tickets">
    <?php
    // Array com os jogos
    $jogos = [
      [
        "jogo" => "Time A vs Time B",
        "data" => "20 de Outubro, 2024",
        "local" => "Estádio Nacional",
        "preco" => 120
      ],
      [
        "jogo" => "Time C vs Time D",
        "data" => "22 de Outubro, 2024",
        "local" => "Arena Central",
        "preco" => 150
      ]
    ];

    // Loop para exibir os jogos dinamicamente
    foreach ($jogos as $jogo) {
      echo "
        <div class='ticket-card'>
          <h2>{$jogo['jogo']}</h2>
          <p>Data: {$jogo['data']}</p>
          <p>Local: {$jogo['local']}</p>
          <p><strong>Preço:</strong> R$ {$jogo['preco']}</p>
          <button>Comprar Ingresso</button>
        </div>";
    }
    ?>
  </div>

  <!-- Rodapé -->
  <footer class="footer">
    <p>© 2024 Futebol Ingressos. Todos os direitos reservados.</p>
  </footer>


    
    
    
</body>
</html>