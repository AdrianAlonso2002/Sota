<html lang="es">

<head>
    <?php require("config/config.php");  ?>
    <title>Sota</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/">
    <script type="text/javascript" src="js/"></script>
    <style>
        ::selection {
            background-color: #9712FF;
        }

        ::-moz-selection {
            background-color: #9712FF;
        }
    </style>
</head>

<body>
    <form id="formu" name="formu" method="post">
        <br />
        Nombre 1 Jugador: <input type="text" name="j1" size="40" required><br /><br />
        Nombre 2 Jugador: <input type="text" name="j2" size="40" required><br /><br />
        <a href="reglas.php" target="_blank" id="reglas-link">->Reglas<-</a>
			<input type="checkbox" id="myCheckbox" name="reglas" disabled required>
			<label id="check" for="myCheckbox"></label>
			<script>
				const reglasLink = document.getElementById('reglas-link');
				const checkbox = document.getElementById('myCheckbox');

				reglasLink.addEventListener('click', function(e) {
					checkbox.removeAttribute('disabled');
				});
			</script><br /><br />
        <input type="submit" name="submit" value="Jugar">
    </form>
    <?php
    if (!empty($_POST)) {
        $j1=test_input($_POST["j1"]);
        $j2=test_input($_POST["j2"]);
        crearSession($j1,$j2);
        header("Refresh:0; url=juego.php");
        exit();
    }
    ?>

</body>

</html>