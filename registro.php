<?php 
session_start();

$servername="localhost";
$username="phpmyadmin";
$password="RedesInformaticas";
$dbname= "db_mayorga";
$conexion=new mysqli($servername,$username,$password,$dbname);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$username=$_POST['username'];
$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];




$sql = "SELECT COUNT(*) as total FROM registro WHERE mail = '$mail'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();

if ($fila["total"] > 0) {
    
} else {
    
    $sql = "INSERT INTO registro ( `nombre`, `apellido`, `telefono`, `username`,`mail`,`contraseña`) VALUES ( ' $nombre', '$apellido', '$telefono', '$username','$mail','$contrasena');";
    $_SESSION["infosesion"] = "exito";
}




if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido satisfactorio";
    echo $success;
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);    
}

header('Location: ./index.php');
?>