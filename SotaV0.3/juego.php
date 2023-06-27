<html lang="es">

<head>
  <title>Sota</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/juego.css">
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
  <?php
  require("config/config.php");
  session_start();
  if (isset($_SESSION['j1']) && isset($_SESSION['j2'])) {
    $j1 = $_SESSION['j1'];
    $j2 = $_SESSION['j2'];
  } else {
    header("location: index.php");
    exit();
  }
  echo "<a href='index.php'>Volver a inicio</a>";

  if ($j2 == 'novato' || $j2 == 'aficionado' || $j2 == 'profesional' || $j2 == 'demonio') {
    $modo = "bot";
  } else {
    $modo = "jugador";
  }
  require("config/repartircartas.php");
  require("config/teclas.php");
  require("config/numcartas.php");
  ?>

  <br/><br/><br/>
  <div class="container">
    <div class="divcarta1">
      <p class="letra" ><?php echo $j1 ?></p>
      <img src="img/rev.png" class="carj1">
      <p  id=numcartasj1 class="letra" ><?php echo numcartasj($cartasj1); ?></p>
    </div>

    <div class="divflecha1">
      <img id="flecha1" id="flecha" class="flechaw" src="img/flecha1.png">
    </div>

    <div class="divcartajuego">
      <p id="turnode" class="letra" ><?php echo turnode($j1); ?></p>
      <img id="cartaenjuego" src="img/rev.png" class="carj">
    </div>

    <div class="divflecha2">
      <img id="flecha2" id="flecha" class="flechaw" src="img/flecha2.png">
    </div>

    <div class="divcarta2">
      <p class="letra" ><?php echo $j2 ?></p>
      <img src="img/rev.png" class="carj2">
      <p id=numcartasj2 class="letra" ><?php echo numcartasj($cartasj2); ?></p>
    </div>
  </div>

</body>

</html>