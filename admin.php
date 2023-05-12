<?php
// Inicia una sesión de PHP en el servidor
session_start();
// Incluye el archivo que contiene la información de la conexión a la base de datos
include("conexion.php");
// Asigna el valor de la variable de sesión "usuario" a una variable local
$varsesion= $_SESSION['usuario'];
// Si el usuario no ha iniciado sesión, redirecciona a la página "index.html"
if(!$varsesion){
    header("location: index.html");
    // Detiene la ejecución del script PHP
    die();
}
?>

<?php
// Incluye el archivo "header.php", que contiene el encabezado del sitio web
include("header.php")
?>


<link rel="stylesheet" href="admin.css">
<main class="container-fluido  p-3">
    <div class="row">
        <div class="col-md-3">
                <div class="card card-body border-warning card-info" >
                <form action="save_registro.php" method="post">
                <center>
                <img src="img/iconophp.png" alt="" sizes="" srcset=""> 
                </center>
                    <div class="form-group">
                    <b> 📌 Crear Registro: </b>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class=" border-dange col-md-12" type="text" name="usuario" class="form-control" placeholder="👤 Usuario - Con el que va a ingresar al sistema" autofocus autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                            <input  class=" border-dange col-md-12" type="text" name="nombre" class="form-control" placeholder="📋 Nombre" autofocus onkeyup="javascript:this.value=this.value.toUpperCase();"  autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                            <input  class=" border-dange col-md-12" type="number" name="cedula" class="form-control" placeholder="🪪 Cédula de ciudadanía" autofocus autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                            <input  class=" border-dange col-md-12" type="email" name="correo" class="form-control" placeholder="📩 Correo - ejemplo@gmail.com" autofocus autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                        <input class=" border-dange col-md-12" type="password" name="contraseña" class="form-control" placeholder="🔑 Contraseña - Con la que va a ingresar al sist.." autofocus>
                    </div>
                    <br>
                    <b>
                    Selecione el cargo:
                    </b>
                    <select name="id_cargo" id="">
                    <?php
                        $query = "SELECT * FROM cargo";
                        $result_cargo = mysqli_query($conexion, $query);
                            while($row=mysqli_fetch_array($result_cargo)){
                                $id_cargo=$row['id'];
                                $nombre_Cargo=$row['nombreCargo'];
                        ?>
                            <option value="<?php echo $id_cargo ?>"><?php echo $nombre_Cargo ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <br>
                    <div class="d-grid grap-2">
                        <input type="button" class="btn btn-info" name="limpiar" value="🧹 Limpiar" onclick="location.href='admin.php'" title="VACIAR LA INFORMACIÓN DE TODOS LOS CAMPOS">
                    </div>
                    <br>
                    <div class="d-grid grap-2">
                        <input type="submit" class="btn btn-warning" name="guardar_registro" value="💾 Guardar" title="GUARDAR LA INFORMACIÓN DE TODOS LOS CAMPOS">
                    </div>
                    
                </form>
            </div>
            <br> <br>
            </div>
            <div class="col-md-9">
            <table class="table table-info" width="100%" border="3">
    <thead>
        <th><center>U S U A R I O</center></th>
        <th><center>N O M B R E</center></th>
        <th><center>C E D U L A</center></th>
        <th><center>C O R R E O</center></th>
        <th><center>C A R G O</center></th>
        <th><center>A C C I O N E S</center></th>
    </thead>
    <tbody>
        <?php
        $query = "SELECT usuario.*, cargo.nombreCargo FROM usuario INNER JOIN cargo ON usuario.id_cargo = cargo.id";
        $result_usuario = mysqli_query($conexion, $query);
        while($row = mysqli_fetch_assoc($result_usuario)){?>
        <tr>
            <td><center><?php echo $row['usuario']?></center></td>
            <td><center><?php echo $row['nombre']?></center></td>
            <td><center><?php echo $row['cedula']?></center></td>
            <td><center><?php echo $row['correo']?></center></td>
            <td><center><?php echo $row['nombreCargo'] ?></center></td>
            <td>
                <center>
                    <a title="EDITAR LA INFORMACIÓN REGISTRADA" href="edit_registro.php?id=<?php echo $row['id']?>" class="btn btn-primary"><i class="fas fa-marker"></i></a>
                    <a title="ELIMINAR ESTE REGISTRO"  href="delete_registro.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </center>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>

                
                
            </div>
        </div>
</main>