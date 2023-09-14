<?php 
session_start();

$servername="localhost";
$username="phpmyadmin";
$password="RedesInformaticas";
$dbname= "db_mayorga";

$conexion=new mysqli($servername,$username,$password,$dbname);

$comentario=$_POST['comentario'];

$sql = "INSERT INTO comentarios (  `comentario`) VALUES ( '$comentario');";

if(mysqli_query($conexion, $sql)){
    $success = "el ingreso ha sido satisfactorio";
    
}
else{
    echo "Error de ingreso ".mysqli_error($conexion);
}

header('Location: ./comentarios.php');
?>