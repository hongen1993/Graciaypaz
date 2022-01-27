<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Restaurante Chino Gracia y Paz">
        <meta name="keywords" content="Restaurante,restaurant,chino,chinese,comida,food,gracia,paz,graciaypaz">
        <meta name="author" content="Hongen Shyu Barcel">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Restaurante Chino Gracia y Paz</title>
        <link href="src/assets/css/main.css" rel="stylesheet" type="text/css" media="screen">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c469a8b399.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrapper">
            <header class="fixed-header">
                <?php include('include/header.php') ?>
            </header>
                <article class="page-contact">
                <div class="row">
                    <div class="columncontact1">
                            <form action="./contacto.php" method="post">
                                <div class="form-header"><h2><span>C</span>ontacta con nosotros</h2></div>
                                <fieldset>
                                    <legend><h4>Reserva tu mesa:</h4></legend>
                                    <label for="fname" class="form-label">Nombre:</label>
                                    <input type="text" class="form-input" id="fname" name="fname" placeholder="Escribe tu nombre">
                                    <label for="sname" class="form-label">Apellidos:</label>
                                    <input type="text" class="form-input" id="sname" name="sname" placeholder="Escribe tus apellidos">
                                    <label for="email" class="form-label">Correo electrónico:</label>
                                    <input type="text" class="form-input" id="email" name="email" placeholder="Escribe tu correo electrónico">
                                    <label for="tlf" class="form-label">Nº de teléfono:</label>
                                    <input type="text" class="form-input" id="tlf" name="tlf" placeholder="Escribe tu número de teléfono">
                                    <label for="reservedate" class="form-label">Fecha de reserva:</label>
                                    <input type="date" class="form-input" id="reservedate" name="reservedate" step="1" min="2020-07-07" max="2025-12-31" value="0-0-0">
                                    <label for="reservehour" class="form-label">Hora de reserva:</label>
                                    <input type="time" class="form-input" id="reservehour" name="reservehour" min="12:30" max="22:30" value="12:30">
                                    <label for="suggestions" class="form-label">Sugerencias:</label>
                                    <div><textarea class="form-textarea" id="suggestions" name="suggestions" rows="6" cols="40" placeholder="Número de personas,alergias,etc..."></textarea></div>
                                    <input type="submit" class="button" id="submit" name="submit" value="Enviar">
                                </fieldset>
                            </form>
                    </div>
                    <div class="columncontact2">
                        <article class="gmap">
                            <iframe title="Ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.6199041949694!2d-4.561941484714064!3d36.65959367997784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72fad3aa2593fb%3A0xd80ee909f1cd38cd!2sAv.%20del%20Mediterr%C3%A1neo%2C%2022%2C%2029130%20Alhaur%C3%ADn%20de%20la%20Torre%2C%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1593913123508!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" document.addEventListener(onTouchStart, {passive: true});></iframe>
                        </article>
                    </div>
                </div>
                </article>
        </div>
        <footer class="page-footer">
                <?php include('include/footer.php') ?>
        </footer>
    </body>
</html>