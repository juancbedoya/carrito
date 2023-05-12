<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
include("conexion.php");

$consulta = "SELECT*FROM usuario  WHERE usuario= '$usuario'and contraseña= '$contraseña' ";
$resultado = mysqli_query($conexion, $consulta);

$row = $resultado->fetch_assoc();

if ($row == null) {
    include("index.html");
?>
<br><br>
<center>
<br><h1>
<FONT COLOR="cyan">ERROR DE AUTENTICACION </FONT></h1>

</center>
    <?php
} else {
    if ($row['id_cargo'] == 1) {
        header("location:admin.php");
    } if ($row['id_cargo'] == 2) {
        header("location:empleado.php");
    } if ($row['id_cargo'] == 3) {
        header("location:usuario.php");
    } elseif(
        include("index.html")
        )
        
    ?>
  <br><br>
<center>
<br><h1>
<FONT COLOR="cyan">ERROR DE AUTENTICACION </FONT></h1>

</center>
<?php
    }

mysqli_free_result($resultado);
mysqli_close($conexion);
?>