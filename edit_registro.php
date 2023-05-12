<?php
include("conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuario WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $usuario = $row['usuario'];
        $nombre = $row['nombre'];
        $cedula = $row['cedula'];
        $correo = $row['correo'];
        $contraseña = $row['contraseña'];
        $cargo = $row['id_cargo'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $cargo = $_POST['id_cargo'];
    $query = "UPDATE usuario set usuario = '$usuario', nombre = '$nombre' , cedula = '$cedula', correo = '$correo', contraseña = '$contraseña' WHERE id =$id ";
    mysqli_query($conexion, $query);
    header("Location: admin.php");
}
?>
<?php include("header.php") ?>
<link rel="stylesheet" href="editar.css">
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body border-danger">
                <form action="edit_registro.php?id=<?php echo $_GET['id']; ?>" method="POST">
                
                    <div class="form-group">
                    👤 Usuario:
                        <input class="border-dange col-md-12" type="text" name="usuario" class="form-control" value="<?php echo $usuario; ?>" placeholder="Cambiar Usuario" autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                    📋 Nombre:
                        <input class="border-dange col-md-12" type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Cambiar Nombre" autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                    🪪 Cedula:
                        <input class="border-dange col-md-12" type="number" name="cedula" class="form-control" value="<?php echo $cedula; ?>" placeholder="Cambiar Cedula" autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                    📩 Correo:
                        <input class="border-dange col-md-12" type="text" name="correo" class="form-control" value="<?php echo $correo; ?>" placeholder="Cambiar Correo" autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                    🔑 Contraseña:
                        <input class="border-dange col-md-12" type="text" name="contraseña" class="form-control" value="<?php echo $contraseña; ?>" placeholder="Cambiar Contraseña">
                    </div>
                    <br>
                    <div class="d-grid grap-2">
                        <input type="button" class="btn btn-danger" name="cancelar" value="❎ Cancelar" onclick="location.href='admin.php'">
                    </div>
                    <br>

                    <div class="d-grid grap-2">
                        <input type="submit" class="btn btn-warning" name="update" value="🔄 Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ?>