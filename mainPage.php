<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "./blocks/prebuilds.php";
        include "./blocks/game.php";
        include "./blocks/gameFilter.php";
        createHead();
    ?>
</head>
<body>
    
    <div id="page-container">
        <?php createHeader() ?>
        <div id="content-wrap">
            <section>
                <p>
                    <br>
                    <h2>Tu lugar para comprar videojuegos e informarte sobre novedades.</h2> <br>
                    <h3>Nuestros precios están bajos y nuestras informaciones son curadas y verificadas con extensividad por nuestros más expertos periodistas.</h3>
                </p>
            </section>
            <br>
            <section>
                <h3>Bajas mass nuevas</h3>
                <table>
                    <tr>
                        <?php
                            foreach ($games as $value) 
                            {
                                echo $value->create();
                            }
                        ?>
                    </tr>
                </table>
            </section>
        </div>
        <?php createFooter() ?>
    </div>
</body>
</html>