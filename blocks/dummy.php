<?php
// Get game data from query string
$name = $_GET['name'] ?? "Unknown Game";
$price = $_GET['price'] ?? 0;
$discount = $_GET['discount'] ?? 0;
$stars = $_GET['stars'] ?? 0;
$genre = $_GET['genre'] ?? "Unknown Genre";
$minidesc = $_GET['minidesc'] ?? "No description available.";
$src = $_GET['src'] ?? "";

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($name) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($name) ?></h1>
    <img src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($name) ?>" width="256px" height="128px">
    <p><strong>Género:</strong> <?= htmlspecialchars($genre) ?></p>
    <p><strong>Precio Original:</strong> <?= number_format($price, 2) ?>€</p>
    <p><strong>Precio Reducido:</strong> <?= number_format($price - $discount, 2) ?>€</p>
    <p><strong>Valoración:</strong> <?= transformToStars($stars) ?></p>
    <p><?= htmlspecialchars($minidesc) ?></p>
</body>
</html>
