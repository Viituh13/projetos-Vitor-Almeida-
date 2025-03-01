<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 01</title>
</head>
<body>
    <?php
    //declaração de variavel 
    $nome = "";
    $idade = 0;
    $resultado = "";

    //atribuiçao de valor
    $nome = "vitor";
    $idade = 19;

    /* 
     //processamento 01 
     $resultado "ola! meu nome é $nome.</br> Tenho $idade anos.";

     //saida forma 01
     echo $resultado;
     */

     //processamento e saida foma 02
     //juntada via concatgenação
     //o operador de contatenaçõa é o . -> ponto final 

     echo 'Ola! Meu nome é: '. $nome . '<br/> tenho '. $idade . ' anos. ';


    ?>
    
</body>
</html>