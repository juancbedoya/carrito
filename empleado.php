<?php
session_start();
include("conexion.php");
$varsesion = $_SESSION['usuario'];
if (!$varsesion) {
    header("location: index.html");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="empleado.css">
    <title>CLIENTES</title>
</head>
<?php include("header.php") ?>

<body>

    <main class="container-fluido  p-3">

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body border-danger ">
                    ESTOS SON TODOS LOS CLIENTES :
                </div>
            </div>
            <div class="col-md-9">
                    <table   class="table table-success" whidt="100%" border="3">
                        <thead>
                        <th><center>U S U A R I O</center></th>
                            <th><center>N O M B R E</center></th>
                            <th><center>C E D U L A</center></th>
                            <th><center>C O R R E O</center></th>
                            <th><center>C A R G O</center></th>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT usuario, nombre, cedula,correo, id_cargo FROM usuario where id_cargo = 3";
                            $result_usuario = mysqli_query($conexion, $query);
                                while($row = mysqli_fetch_assoc($result_usuario)){?>
                                <tr>
                                    <td><center><?php echo $row['usuario']?></center></td>
                                    <td><center><?php echo $row['nombre']?></center></td>
                                    <td><center><?php echo $row['cedula']?></center></td>
                                    <td><center><?php echo $row['correo']?></center></td>
                                    <td><center><?php echo $row['id_cargo'] ?></center></td>
                                </tr>
                            <?php }?> 
                        </tbody>
                </div>
        </div>
    </main>
</body>