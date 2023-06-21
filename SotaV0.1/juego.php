<html lang="es">

<head>
  <title>Sota</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/juego.css">
  <script type="text/javascript" src="js/teclas.js"></script>
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

  <br/><br/><br/><br/>
  <div class="container">
    <div class="divcarta1">
      <p><?php echo $j1 ?></p>
      <img src="img/rev.png" class="carj1">
      <p  id=numcartasj1 ><?php echo numcartasj($cartasj1); ?></p>
    </div>

    <div class="divcartajuego">
      <img id="cartaenjuego" src="img/rev.png" class="carj">
    </div>

    <div class="divcarta2">
      <p><?php echo $j2 ?></p>
      <img src="img/rev.png" class="carj2">
      <p id=numcartasj2 ><?php echo numcartasj($cartasj2); ?></p>
    </div>
  </div>

</body>

</html>