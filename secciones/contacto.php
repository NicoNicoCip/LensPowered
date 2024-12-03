<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "../blocks/prebuilds.php";
        createHead();
    ?>
</head>
<body>
<?php createHeader() ?>

<form>
    <p>Nombre: <input type="text"></p>
    <br>
    <p>Apellidos: <input type="text"></p>
    <br>
    <p>Correo Electrónico: <input type="email"></p>
    <br>
    <p>Teléfono: <input type="number"></p>
    <br>
    <p>Consulta: <textarea rows="4" cols="50">
    <br>
    <input type="submit" id="enviar" value="Enviar">
    <input type="reset" id="restablecer" value="Restablecer">
</form>

<?php createFooter() ?>
</body>