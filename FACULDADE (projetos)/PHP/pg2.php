<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag2</title>
</head>
<body>
    <?php
          session_start();
          if (isset($_GET['d']) && $_GET['d']==1){
            session_destroy();
          }
          echo $_SESSION["T"];
          echo "<a
           href='pg2.php?d=1'>finalizar sessao</a>"

    ?>
    
</body>
</html>