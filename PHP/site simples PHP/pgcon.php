<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Shows.Com</title>
    <link rel="stylesheet" href="css/pgcon.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <h1>Contato - Shows.Com</h1>
        <nav>
            <ul>
                <li><a href="pgp.php">Shows </a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a href="">Login</a></li>
                <li><a href="pgsob.php">Sobre</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção de Contato -->
    <section class="contact-section">
        <h2>Entre em Contato</h2>
        <p>Para mais informações, entre em contato com nossos responsáveis:</p>
        
        <!-- Lista de Responsáveis -->
        <div class="responsaveis">
            <div class="responsavel">
                <h3>Vitor Almeida de Meira Santos </h3>
                <p>Função: Gerente de Vendas</p>
                <p>RGM:37948521</p>
                <p>Email:</p>
            </div>
            <div class="responsavel">
                <h3>Marcelo Júnior Nascimento Dos Santos
                </h3>
                <p>Função: Coordenador de Marketing</p>
                <p>RGM:38944014</p>
                <p>Email:</p>
            </div>
            <div class="responsavel">
                <h3>Davy Alexandre Curintima</h3>
                <p>Função: Diretor de Operações</p>
                <p>RGM:38548381</p>
                <p>Email:</p>
            </div>
            <div class="responsavel">
                <h3>Gustavo henrique Zamperlini de Queiroz 
                </h3>
                <p>Função: Atendimento ao Cliente</p>
                <p>RGM:37833472</p>
                <p>Email: </p>
            </div>
            <div class="responsavel">
                <h3>Marcelo Fulanetti Ruiz Luz</h3>
                <p>Função: Coordenador de Logística</p>
                <p>RGM: 38090741</p>
                <p>Email: </p>
            </div>
            <div class="responsavel">
                <h3>Francisco Gustavo Gonzales Lopes Junior
                </h3>
                <p>Função: Gerente de Eventos</p>
                <p>RGM: 37924583</p>
                <p>Email: </p>
            </div>
            <div class="responsavel">
                <h3>,,,</h3>
                <p>Função: Supervisor de Segurança</p>
                <p>RGM:</p>
                <p>Email:</p>
            </div>
        </div>

        <!-- Formulário de Contato -->
        <h2>Envie uma Mensagem</h2>
        <form action="pgconb.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar Mensagem</button>
        </form>
    </section>

   <!-- Rodapé -->
    <footer class="footer">
        <p>© 2024 Shows.Com. Todos os direitos reservados.</p>
    </footer> 
</body>
</html>
