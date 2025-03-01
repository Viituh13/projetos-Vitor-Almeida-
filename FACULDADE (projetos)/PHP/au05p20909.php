<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swith</title>
</head>
<body>
    <form action = "au05p20909.php" method = "POST">
    <label> Digite um mes </label>
    <option value = "">escolha um mes</option>
        <select name = "mes" >
        <option value="1">mes 1</option> 
        <option value="2">mes 2</option> 
        <option value="3">mes 3</option> 
        <option value="4">mes 4</option> 
        <option value="5">mes 5</option> 
        <option value="6">mes 6</option> 
        <option value="7">mes 7</option> 
        <option value="8">mes 8 </option> 
        <option value="9">mes 9</option> 
        <option value="10">mes 10</option> 
        <option value="11">mes 11</option>  
        <option value="12">mes 12</option>  
    </select>
        <input type ="submit" value="enviar"/>
    </form>
    <?php
     if(isset($_POST["mes"])){
         $mes = $_POST["mes"];
        switch($mes){
            case 1:
                echo "JAneiro";
                break ;           
            case 2:
                echo "fevereiro";
                break ; 
            case 3:
                echo "Março";
                break;            
            case 4:
                echo "Abril";
                break;  
            case 5:
                echo "maio";
                break ;           
            case 6:
                echo "junho";
                break ; 
            case 7:
            case 8:
            case 9:
             echo "terceiro trimestre";
            break;
            case 10:
            case 11:
            case 12:
                echo "quarto trimestre";
            break;
                default:
                    echo "mes";
        

          }
     }
    ?>

</body>
</html>