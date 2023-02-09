<?php
    session_start();
    $nombre = "Pepe";
    $pass = "prueba";

    if (isset($_POST["enviar"])){
        if($_POST["nombre"] == $nombre){
            if($_POST["pass"] == $pass){
                $_SESSION["nombre"] = $_POST["nombre"];
                $_SESSION["pass"] = $_POST["pass"];
                header("Location: ../Vista/home.php");
            }else{
                header("Location: ../index.php?error=1");
            }
        } else{
            header("Location: ../index.php?error=2");
        }
    }