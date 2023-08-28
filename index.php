<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxi cafeteria</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <link rel="icon" href="https://www.shareicon.net/data/256x256/2015/09/21/644139_pin_512x512.png">
</head>

<body class="container">


    <header>
        <img class="logo" src="https://img.freepik.com/vector-gratis/insignia-cafeteria-estilo-vintage_1176-95.jpg">

        <nav>
            <ul>
                <li class="zoom"><a href="#inicio">Productos destacados</a></li>
                <li class="zoom"><a href="#menu">Menu</a></li>
                <li class="zoom"><a href="#cursos">Cursos</a></l>
                <li class="zoom"><a href="#contactos">Contactos</a></li>
                <li class="zoom"><a href="login.html">log in</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div>
            <h1 id="inicio" class="titulo"> Productos destacados </h1>

            <article class="articulos">

                <article>
                    <h2>Medialunas </h2>
                    <img class="imagen"
                        src="https://www.hogarmania.com/archivos/202101/cocina-recetas-como-hacer-croissants-cruasanes-caseros-668x400x80xX.jpg">

                </article>

                <article>

                    <h2>Expresso</h2>
                    <img class="imagen"
                        src="https://www.mokasol.es/wp-content/uploads/2021/07/cafe-expreso-con-espuma-en-forma-de-corazon-800x530.jpg"
                        alt="">

                </article>

                <article>

                    <h2>frapuccino</h2>
                    <img class="imagen"
                        src="https://img-global.cpcdn.com/recipes/6f880ce00b6270cf/680x482cq70/frapuccino-light-o-no-foto-principal.jpg"
                        alt="">

                </article>

                <article>

                    <h2>Tostados</h2>
                    <img class="imagen"
                        src="https://cloudfront-us-east-1.images.arcpublishing.com/radiomitre/J3Q4RDR2HFCFFMWLNWR4CZSLIQ.jpg"
                        alt="">
                </article>

            </article>

        </div>


        <div>
            <h1 id="menu" class="titulo">Menu</h1>
            <article class="menu">
                <img src="https://img.restaurantguru.com/r4ae-Cafe-Martinez-menu-2021-09-1.jpg">
            </article>
        </div>

        <div class="curso">
            <h1 id="cursos" class="titulo">Cursos</h1>
            <iframe class="curso" width="560" height="315" src="https://www.youtube.com/embed/68HQXBw557k"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

       

    </main>

    <footer>

        <div class="contactos">
        <h1 id="contactos" class="contacto">Contactos</h1>
        <h2 class="relleno-contacto">Numero de telefono: 11 xxxx xxxx</h2>
        <h2 class="relleno-contacto">Instagram: @maxi_mayorga</h2>
        <h2 class="relleno-contacto">Email: xxxxxxx@gmail.com</h2>
        </div>
        
        <?php
        $servername="localhost";
        $username="phpmyadmin";
        $password="RedesInformaticas";
        $dbname= "db_mayorga";
        $conexion=new mysqli($servernameame,$username,$password,$dbname);
            
        $sql = "SELECT contador FROM visitas  = '$contador'";
        $contador = $contador + 1;
        echo $contador;
        $fechavisita=date("y/m/d");
        $sql = "INSERT INTO visitas (`contador`,`fecha`) VALUES ('$contador','$fechavisita');";
        

        if(mysqli_query($conexion, $sql)){
            $success = "el ingreso ha sido satisfactorio";
        }
        else{
            echo "Error de ingreso ".mysqli_error($conexion);    
        }

        ?>

        <div class="musica">

            <iframe src="https://open.spotify.com/embed/playlist/6P75RG9yKcgxUBeHUcccrv?utm_source=generator&theme=0" width="100%" height="100%" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

        </div>


    </footer>

</body>

</html>