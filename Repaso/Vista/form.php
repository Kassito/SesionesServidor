<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Control/controlador.php" method="post">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="password" id="pass" name="pass" placeholder="Contraseña">
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
        if(isset($_GET["error"])){
            switch ($_GET["error"]) {
                case 1:
                    echo "<p>La contraseña no es correcta</p><br>";
                    break;
                case 2:
                    echo "<p>El nombre no es correcto</p><br>";
                    break;
                    
                default:
                    # code...
                    break;
            }
        }
        echo $_SESSION["nombre"];


    ?>
</body>
</html>