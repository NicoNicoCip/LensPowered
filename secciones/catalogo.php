<?php
include "../blocks/game.php";
include "../blocks/gameFilter.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "../blocks/prebuilds.php";
        createHead();
    ?>
</head>
<body>
    
    <div id="page-container">
        <?php createHeader() ?>
        <div id="content-wrap">
            <main>
                <article>
                    <h1>Catálogo</h1>
                    <section>
                        <table>
                            <tr>
                                <?php createGames() ?>
                            </tr>
                        </table>
                    </section>
                </article>

                <aside>
                    <form method="post" action="./catalogo.php" id="filtro">
                        <p>Precio</p>
                        <div class="Precio">
                            <p>Entre 
                                <input type="text" name="precioMin" placeholder="min" size="4" maxlength="6" 
                                    value="<?= isset($_POST['precioMin']) ? htmlspecialchars($_POST['precioMin']) : '' ?>"> y 
                                <input type="text" name="precioMax" placeholder="max" size="4" maxlength="6" 
                                    value="<?= isset($_POST['precioMax']) ? htmlspecialchars($_POST['precioMax']) : '' ?>">
                            </p>
                        </div>
                        <p>Género</p>
                        <div class="Género">
                            <select name="genero">
                                <option value="">Género...</option>
                                <option <?= isset($_POST['genero']) && $_POST['genero'] == 'RPG' ? 'selected' : '' ?>>RPG</option>
                                <option <?= isset($_POST['genero']) && $_POST['genero'] == "Beat'em Up" ? 'selected' : '' ?>>Beat'em Up</option>
                                <option <?= isset($_POST['genero']) && $_POST['genero'] == 'Puzzle' ? 'selected' : '' ?>>Puzzle</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Buscar" id="buscar">
                            <button type="button" onclick="window.location.href='./catalogo.php'" id="buscar">Restablecer</button>
                        </div>
                    </form>
                </aside>
            </main>

        </div>
        <?php createFooter() ?>
    </div>
</body>
</html>