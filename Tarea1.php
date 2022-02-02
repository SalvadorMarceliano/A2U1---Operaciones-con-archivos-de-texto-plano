<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

     <section class="hero is-primary">
  			<div class="hero-body">
    				<p class="title">
      					Datos Almacenados
    				</p>
  			</div>
	</section>

    <section class="section is-medium columns">
        <div class="column"></div>
        <div class= "column is-five-fifths">
            <form action="Tarea01.php" method="post">
                <div class= "box">
                    <div>
                        <label class="label">Nombre de la cancion </label>
                        <input class="input is-primary" type="text" name="NombreCancion" required>
                    </div>

                    <div>
                        <label class="label">Nombre del artista</label>
                        <input class="input is-primary" type="text" name="NombreArtista">
                    </div>

                    <div>
						<input class="button is-primary" type="submit" value="Enviar">
					</div>

                </div>
            </form>

        </div>
        <div class="column"></div>
    </section>
</body>
</html>