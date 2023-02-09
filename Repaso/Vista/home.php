<?php
    session_start();
    if(isset($_SESSION["nombre"])){
        echo "<a href='../index.php?logout=1'>Desconectarse</a>";
        echo "<h1>Bienvenido " . $_SESSION["nombre"] . "</h1>";
    }
