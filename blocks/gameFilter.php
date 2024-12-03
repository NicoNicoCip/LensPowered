<?php

$precioMin = null;
$precioMax = null;
$genero = null;
$resetea = null;

if(isset($_POST['precioMin'])) $precioMin = $_POST['precioMin'];
if(isset($_POST['precioMax'])) $precioMax = $_POST['precioMax'];
if(isset($_POST['genero'])) $genero = $_POST['genero'];
if(isset($_POST['resetea'])) $resetea = $_POST['resetea'];

$games = array(
    0=> new Game("../img/K2.jpg","Yakuza Kiwami 2","Revolucionaria entrega que estrena el nuevo motor gráfico Dragon Engine.", 
            29.99, 10, 4,"Beat'em Up"),
    1=> new Game("../img/EldenRing.jpg","Elden Ring","Elden Ring es un juego Souls-Like ganador de multiples premios como Juego del Año, Mejor Banda Sonora y más.",
            49.99, 15, 5,"RPG"),
    2=> new Game("../img/Portal.jpg","Portal","Un juego de puzzle con portales",
             9.99, 0, 4,"Puzzle"),
    3=> new Game("../img/K2.jpg","Yakuza Kiwami 2","Revolucionaria entrega que estrena el nuevo motor gráfico Dragon Engine.", 
             29.99, 10, 4,"Beat'em Up"),
    4=> new Game("../img/EldenRing.jpg","Elden Ring","Elden Ring es un juego Souls-Like ganador de multiples premios como Juego del Año, Mejor Banda Sonora y más.",
             49.99, 15, 5,"RPG"),
    5=> new Game("../img/Portal.jpg","Portal","Un juego de puzzle con portales",
              9.99, 0, 4,"Puzzle"),
    6=> new Game("../img/K2.jpg","Yakuza Kiwami 2","Revolucionaria entrega que estrena el nuevo motor gráfico Dragon Engine.", 
              29.99, 10, 4,"Beat'em Up"),
    7=> new Game("../img/EldenRing.jpg","Elden Ring","Elden Ring es un juego Souls-Like ganador de multiples premios como Juego del Año, Mejor Banda Sonora y más.",
              49.99, 15, 5,"RPG"),
    8=> new Game("../img/Portal.jpg","Portal","Un juego de puzzle con portales",
               9.99, 0, 4,"Puzzle")
);

function createGames()
{
    createFiltered();
}

function createFiltered()
{
    global $games, $precioMin, $precioMax, $genero, $resetea;

    if ($resetea) {
        $precioMin = null;
        $precioMax = null;
        $genero = null;
    }

    foreach ($games as $value) 
    {
        $print = true;

        $realPrice = $value->price - $value->discount;

        if (!empty($precioMin) && $realPrice < $precioMin) 
            $print = false;
        if (!empty($precioMax) && $realPrice > $precioMax)
            $print = false;

        if (!empty($genero) && $value->genre != $genero)
            $print = false;

        if ($print) {
            echo $value->create();
        }
    }
}