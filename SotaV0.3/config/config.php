<?php
//Limpiar variables.

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function crearSession($j1,$j2)
{
    $tiempo_expiracion = 7200;
    session_set_cookie_params($tiempo_expiracion);
    session_start();
    $_SESSION["j1"] = $j1;
    $_SESSION["j2"] = $j2;
}

?>