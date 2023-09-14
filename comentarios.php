<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido a mis comentarios</title>
    <link rel="icon" href="https://www.shareicon.net/data/256x256/2015/09/21/644139_pin_512x512.png">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">

    <header>
        <a href="index.php"><img class="logo" src="https://img.freepik.com/vector-gratis/insignia-cafeteria-estilo-vintage_1176-95.jpg"></a>
    </header>

    <main> 
    <div class="div-comentario">

    <h1 class="titulo">comentarios</h1>

    <form action="comentario.php" method="POST">
    
        <input name="comentario" class="comentario" type="text" placeholder="comentarios..." >
        <br>
        <input class="enviar" type="submit">
    </form>

    <?php
        $conexionDatos = new mysqli('localhost', 'phpmyadmin', 'RedesInformaticas', 'db_mayorga');
		$queryComentarios = "SELECT comentario FROM comentarios";
        
		$resultDatos = mysqli_query($conexionDatos, $queryComentarios);

		while($comentario = mysqli_fetch_array($resultDatos)){
			echo "<div><p class=\"muestra_comentario\">$comentario[0]</p></div>";
		}
		
        if(mysqli_query($conexion, $sql)){
            $success = "el ingreso ha sido satisfactorio";
            
        }
        else{
            echo "Error de ingreso ".mysqli_error($conexion);
        }
	?>


    </div>
    </main>
</body>
</html>