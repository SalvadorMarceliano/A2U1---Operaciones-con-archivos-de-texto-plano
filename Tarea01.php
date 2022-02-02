<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenamiento</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

    <section class="hero is-info">
  		<div class="hero-body">
   		    <p class="title">Informacion guardada </p>
		</div>
	</section>
    

    <section class="section is-medium columns">
        <div class="column"></div>
        <div class= "column is-two-fifths">
            <?php
                 
                 $NM = $_POST["NombreCancion"];
                 $NA = $_POST["NombreArtista"];

                 echo "<h1 class='is-subtitle'>";
                 echo "<strong> Cancion: </strong>". $NM;
                 echo "<strong> Artista: </strong>". $NA;

                 echo "/h1";
            ?>
        </div>
        <div class="column">
        </div>
    </section>

    <section>  <!--  Script de PHP para crear el archivo notas.txt  -->
        <?php
             
             $crearArchivo = fopen("notas.txt", "w");
             fwrite($crearArchivo, "$NM $NA");
             fclose($crearArchivo);
        ?>
    </section>

    <section class="section">  <!--  Script para leer archivo notas.txt  -->
        <p class = "subtitle">Leer archivo creado</p>
        <div class="column">
            <?php

            $lectura = fopen("notas.txt", "r");

            while(!feof($lectura)){
                $linea = fgets($lectura);
                echo nl2br($linea);
            }

            fclose($lectura);
            ?>
        </div>
    </section>
</body>
</html>