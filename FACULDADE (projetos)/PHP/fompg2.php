<?php
    if (!isset ($_POST['usuario']) || !isset($_POST['senha'])){
        echo "os dados nao chegaram!";
    }
    else{
        session_start();
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        if ($usuario === "Paulo" && $senha === "aula8"){
            $_SESSION["logado"] = "s";
            $_SESSION["usuario"] = $usuario;
            $_SESSION["erro"] = "";
            echo "usuario autenticado!";
        }
        else{
            $_SESSION["erro"] = "s";
            echo "usuario ou senha incorretos"
        }

    }
?>