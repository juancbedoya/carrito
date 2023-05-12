<?php 

include("conexion.php");
    if(isset($_POST['guardar_registro'])){
        $registro_usuario = $_POST['usuario'];
        $registro_nombre = $_POST['nombre'];
        $registro_cedula = $_POST['cedula'];
        $registro_correo = $_POST['correo'];
        $registro_contraseña = $_POST['contraseña'];
        $registro_cargo = 3;

        $query = "INSERT INTO usuario (usuario,nombre,cedula,correo,contraseña,id_cargo) 
        VALUES ('$registro_usuario','$registro_nombre','$registro_cedula','$registro_correo','$registro_contraseña','$registro_cargo')";
        $resultado =mysqli_query($conexion, $query);
        if(!$resultado){
            header('refresh:0,url=index.html?registrado');
        }else{
            header('refresh:0,url=index.html?error pa');
        }
    }
