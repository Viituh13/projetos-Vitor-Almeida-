<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag 1</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["T"] ="ativo";
        echo "sessão habilitada
        com sucesso!";
        
    ?>
    
</body>
</html>