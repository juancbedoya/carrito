<?php
session_start();
include("conexion.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="index.css">
    <link rel="shortcut icon" href="img/iconophp.png" type="image/x-icon">

    <title>CREAR CUENTA</title>
</head>

<body>
<form action="save_registro_publico.php" method="post">
    <section class="form-register">
                <h4>📌 CREAR CUENTA</h4>
                <input class="controls" type="text" name="usuario" id="usuario" placeholder="👤 Usuario - Con el que va a ingresar al siste.."  onkeyup="javascript:this.value=this.value.toUpperCase();"  autocomplete="off" required>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="📋 Nombre"  onkeyup="javascript:this.value=this.value.toUpperCase();"  autocomplete="off" required>
                <input class="controls" type="number" name="cedula" id="cedula" placeholder="🪪 Cédula de ciudadanía "  onkeyup="javascript:this.value=this.value.toUpperCase();"  autocomplete="off" required>
                <input class="controls" type="email" name="correo" id="correo" placeholder="📩 Correo - ejemplo@gmail.com "  autocomplete="off" required>
                <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="🔑 Contraseña - Con la que va a ingresar al sis.." required>
                <input type="button" class="botons" name="limpiar" value="🧹 LIMPIAR" onclick="location.href='crear.php'" title="VACIAR LA INFORMACIÓN DE TODOS LOS CAMPOS">
                <input type="submit" class="botons" name="guardar_registro" value="💾 GUARDAR" title="GUARDAR LA INFORMACIÓN DE TODOS LOS CAMPOS">
                <input type="button" class="botons" name="atras" value="⬅ ATRAS" onclick="location.href='index.html'" title="REGRESAR A LA PAGINA DE INICIAR SESION">
    </section>   

</form>

</body>

</html>

