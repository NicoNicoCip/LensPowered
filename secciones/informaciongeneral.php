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
            <br><br>
            <section>
            <h1>Información General</h1>
                <table>
                    <thead>
                        <tr>
                            <td>Día</td>
                            <td>Horario</td>
                            <td>Ubicación</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes a Viernes<td>
                            <td>8:30 a 17:45<td>
                            <td>12006 Castellón de la Plana, Castellón<td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <br><br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d191.038302911139!2d-0.0696634017246018!3d39.99475643986449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1733229006000!5m2!1ses!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <?php createFooter() ?>
    </div>
</body>
</html>