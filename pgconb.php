<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $assunto = htmlspecialchars($_POST['assunto']);
            $mensagem = htmlspecialchars($_POST['mensagem']);
            
            echo "<div class='mensagem-enviada'>";
            echo "<h3>Obrigado pelo contato, $nome!</h3>";
            echo "<p><strong>Assunto:</strong> $assunto</p>";
            echo "<p><strong>Mensagem:</strong> $mensagem</p>";
            echo "<p><strong>Email para resposta:</strong> $email</p>";
            echo "</div>";
        }
        ?>