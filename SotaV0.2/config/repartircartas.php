<?php

$maxcartas = 40; //El máximo de cartas que hay.
$cartasenjuego = [];
$contcartasj1 = 20;
$contcartasj2 = 20;
$cartasj1 = [];
$cartasj2 = [];

//Array con el nombre de las imagenes de cada carta.
$cartas = array(
    "1B", "1C", "1E", "1O", "2B", "2C", "2E", "2O",
    "3B", "3C", "3E", "3O", "4B", "4C", "4E", "4O",
    "5B", "5C", "5E", "5O", "6B", "6C", "6E", "6O",
    "7B", "7C", "7E", "7O", "CB", "CC", "CE", "CO",
    "RB", "RC", "RE", "RO", "SB", "SC", "SE", "SO",
);

// Repartir las cartas
shuffle($cartas);
$cartasj1 = array_slice($cartas, 0, $contcartasj1);
$cartas = array_slice($cartas, $contcartasj1);
$cartasj2 = $cartas;

?>



