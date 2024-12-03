<?php
function createHeader()
{
    ?>
    <header>
        <center>
            <table> 
                <tr>
                    <th id="headerNav"><img src="../LensPowered.ico" alt="" width="64px" height="64px"></th>
                    <th id="headerNav"><h1>Lens Powered</h1></th>
                    <th id="headerNav"><a href="../index.php">Inicio</a> - <a href="../secciones/informaciongeneral.php">Información</a> - <a href="../secciones/catalogo.php">Catálogo</a></th>
                </tr>
            </table>
        </center>
    </header>
    <?php
}

function createFooter()
{
    ?>
    <footer>
        <p>&copy; Aquí va un copyright pero como no tenemos y nadie lee la letra pequeña no pasa nada :]</p>
    </footer>
    <?php
}

function createHead()
{
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lens Powered</title>
    <meta name="autores" content="Javier Pérez | Nicolas Circinau">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../LensPowered.ico" type="image/x-icon">
    <?php
}

function createGameMini($src, $name, $price, $discount, $stars)
{
    return
    "<td id='listItem'>".
        "<h4>". htmlspecialchars($name) ."</h4>".
        "<img src='". htmlspecialchars($src) ."' alt='". htmlspecialchars(str_replace(" ", "", $name)) .".jpg width='256px' height='128px'>".
        "<br>".
        "<h5>Precio: ". number_format($price, 2) ."€ <br>".
        "Precio Reducido: ". number_format($price - $discount, 2) ."€<br>".
        transformToStars($stars) ."</h5>".
    "</td>";
}


function transformToStars(int $nr)
{
    $out = "";
    for ($i=1; $i <= 5; $i++) 
    { 
        if($i <= $nr) $out .= "★";
        else $out .= "☆";
    }
    return $out;
}