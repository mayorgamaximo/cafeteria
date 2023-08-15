<?php 
$conexion=new mysqli('localhost','phpmyadmin','RedesInformaticas','db_mayorga');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$username=$_POST['username'];
$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];

if(!$conexion){
    die('error de conexion'.mysql_error());
}

$sql = "INSERT INTO registro (`nombre`, `apellido`, `telefono`, `username`,`mail`,`contrasena`) VALUES ('$nombre', '$apellido', '$telefono', '$username','$mail','$contrasena');";

if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido satisfactorio";
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);    
}

?>