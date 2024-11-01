<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cancelar'])) {
        // Finaliza a sessão se o usuário clicar em "Cancelar Cadastro"
        session_destroy();
        header("Location: pglog.php"); // Redireciona de volta para a página de login
        exit();
    } elseif (isset($_POST['enviar'])) {
        // Obtém e valida dados do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $idade = htmlspecialchars($_POST['idade']);
        $tipo_ingresso = htmlspecialchars($_POST['tipo_ingresso']);
        $categoria_meia = isset($_POST['categoria_meia']) ? htmlspecialchars($_POST['categoria_meia']) : null;
        $tipo_pista = htmlspecialchars($_POST['tipo_pista']);

        // Salva os dados na sessão para exibir a mensagem de boas-vindas posteriormente
        $_SESSION['nome_usuario'] = $nome;
        
        echo "<p>Cadastro efetuado com sucesso! Bem-vindo(a), $nome.</p>";
        echo "<p>Tipo de ingresso: $tipo_ingresso</p>";
        if ($tipo_ingresso == 'meia') {
            echo "<p>Categoria: $categoria_meia</p>";
        }
        echo "<p>Tipo de pista: $tipo_pista</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - Shows.Com</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header class="header">
        <h1>Cadastro de Usuário - Shows.Com</h1>
        <nav>
            <ul>
                <li><a href="pgp.php">Home</a></li>
                <li><a href="pgcon.php">Contato</a></li>
                <li><a href="pglog.php">Login</a></li>
                <li><a href="pgsob.php">Sobre</a></li>
            </ul>
        </nav>
    </header>

    <section class="formulario-cadastro">
        <form method="POST" action="login_cadastro.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="idade">Idade:</label>
            <select name="idade" id="idade" required>
                <?php
                // Preenche opções de idade com `for`
                for ($i = 18; $i <= 100; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            
            <label for="genero">Gênero:</label>
            <select name="genero" id="genero">
                <?php
                // Alternativas de gênero com `switch case`
                $generos = ["Masculino", "Feminino", "Outro", "Prefiro não dizer"];
                $i = 0;

                while ($i < count($generos)) {
                    switch ($generos[$i]) {
                        case "Masculino":
                        case "Feminino":
                        case "Outro":
                        case "Prefiro não dizer":
                            echo "<option value='{$generos[$i]}'>{$generos[$i]}</option>";
                            break;
                    }
                    $i++;
                }
                ?>
            </select>

            <label for="tipo_ingresso">Tipo de Ingresso:</label>
            <select name="tipo_ingresso" id="tipo_ingresso" required onchange="toggleMeiaCategoria()">
                <option value="inteiro">Inteiro</option>
                <option value="meia">Meia-Entrada</option>
            </select>

            <div id="meia_categoria" style="display: none;">
                <label for="categoria_meia">Categoria:</label>
                <select name="categoria_meia" id="categoria_meia">
                    <option value="estudante">Estudante</option>
                    <option value="idoso">Idoso</option>
                    <option value="professor">Professor</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <label for="tipo_pista">Tipo de Pista:</label>
            <select name="tipo_pista" id="tipo_pista" required>
                <option value="premium">Pista Premium</option>
                <option value="pista">Pista</option>
                <option value="camarote">Camarote</option>
            </select>

            <button type="submit" name="enviar">Enviar</button>
            <button type="submit" name="cancelar">Cancelar Cadastro</button>
        </form>
    </section>

    <script>
        function toggleMeiaCategoria() {
            const tipoIngresso = document.getElementById('tipo_ingresso').value;
            const meiaCategoria = document.getElementById('meia_categoria');
            meiaCategoria.style.display = tipoIngresso === 'meia' ? 'block' : 'none';
        }
    </script>
</body>
</html>
