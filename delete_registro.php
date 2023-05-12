<?php 

    include("conexion.php");

    if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "DELETE FROM usuario WHERE id = $id";
$resultado = mysqli_query($conexion, $query);
if(!$resultado){
    die("failed delete");
}

    header("location: admin.php");
    }
