<?php
// Start the session
session_start();

$servername="localhost";
$username="phpmyadmin";
$password="RedesInformaticas";
$dbname= "db_mayorga";
$conexion=new mysqli($servernameame,$username,$password,$dbname);


$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];


$sql = "SELECT COUNT(*) as total FROM registro WHERE mail = '$mail' AND '$contrasena'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();


if ($fila["total"] > 0) {
    header('Location: index.php');
    $_SESSION["infosesion"] = "exito";
    $_SESSION["infonombre"] = $_POST['nombre'];

} else {

    header('Location: logins.php');
    $_SESSION["infosesion"] = "error";
    $error="mail o contraseña incorrectas";
}


if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido satisfactorio";
    
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);    
}


?>