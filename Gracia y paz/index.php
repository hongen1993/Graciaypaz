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
        
    </head>
    <body>
        <div class="wrapper">
            <header class="fixed-header">
                <?php include('include/header.php') ?>
            </header>
            <main>
                <section>
                    <article class="page-jumbo">
                        <article class="row">
                            <article class="columnjumbo"><a href="contacto.php" class="botonjumboi">Reserva</a></article>
                            <article class="columnjumbo"><a href="index.php#sobrenosotros"><img id=rest src="src/assets/img/logo%20rest.png" alt="logorest"></a></article>
                            <article class="columnjumbod"><a href="carta.php" class="botonjumbod">Nuestra carta</a></article>
                        </article>
                    </article>
                    <article class="sobrenosotros"><a name="sobrenosotros" id="sobrenosotros"></a>
                        <header>
                            <h1>SOBRE NOSOTROS</h1>                            </header>
                        <article class="row">
                            <article class="column">
                                <img class="imgleft" src="src/assets/img/Rest1.jpg" alt="Rest1">
                                <img class="imgleft" src="src/assets/img/Rest2.jpg" alt="Rest2">                        
                            </article>
                            <article class="column" id="columntext">
                                <p>Somos un restaurante de comida china</p>
                                <p>ubicado en Alhaurín de la torre desde el año 2000,</p>
                                <p>contamos con más de 20 años de experiencia </p>
                                <p>y solo utilizamos ingredientes de la más altísima calidad</p>
                                <p>podra disfrutar de auténticas delicias chinas.</p>
                                <p>¡¿A que esperas para visitarnos?!</p>
                            </article>
                            <article class="column">
                                <img class="imgright" src="src/assets/img/Rest3.jpg" alt="Rest3">
                                <img class="imgright" src="src/assets/img/Rest4.jpg" alt="Rest4">
                            </article>
                        </article>
                    </article>
                            <article class="galeria"><a name="galeria" id="galeria"></a>
                            <h2>Nuestros Platos</h2>
                                 <ul>
                                    <li><a href="#img1"><img src="./src/assets/img/Sopa%20aleta%20de%20tiburon.jpg" alt="galeria1"></a></li>
                                    <li><a href="#img2"><img src="./src/assets/img/Sopa%20agripicante.jpg" alt="galeria2"></a></li>
                                    <li><a href="#img3"><img src="./src/assets/img/Cerdo-agridulce.jpg" alt="galeria3"></a></li>
                                    <li><a href="#img4"><img src="./src/assets/img/Rollo%20vietnam.jpg" alt="galeria4"></a></li>
                                    <li><a href="#img5"><img src="./src/assets/img/Langostinos%20picante.jpg" alt="galeria5"></a></li>
                                    <li><a href="#img6"><img src="./src/assets/img/chow-mein.jpg" alt="galeria6"></a></li>
                                    <li><a href="#img7"><img src="./src/assets/img/dumplings.jpg" alt="galeria7"></a></li>
                                    <li><a href="#img8"><img src="./src/assets/img/Arroz%20frito.jpg" alt="galeria8"></a></li>
                                    <li><a href="#img9"><img src="./src/assets/img/pollo%20al%20limon.jpg" alt="galeria9"></a></li>
                                    <li><a href="#img10"><img src="./src/assets/img/Pollo%20con%20almendras.jpg" alt="galeria10"></a></li>
                                    <li><a href="#img11"><img src="./src/assets/img/pato%20pekin.jpg" alt="galeria11"></a></li>
                                    <li><a href="#img12"><img src="./src/assets/img/Costillas%20agridulces.jpg" alt="galeria12"></a></li>
                                    <li><a href="#img13"><img src="./src/assets/img/Cerdo%20asado%20cha%20siu.jpg" alt="galeria13"></a></li>
                                    <li><a href="#img14"><img src="./src/assets/img/pollo-con-bambu-y-setas-chinas.jpg" alt="galeria14"></a></li>
                                    <li><a href="#img15"><img src="./src/assets/img/Ternera%20en%20salsa%20de%20ostras.jpg" alt="galeria15"></a></li>
                                    <li><a href="#img16"><img src="./src/assets/img/pollo%20conbao.jpg" alt="galeria16"></a></li>
                                    <li><a href="#img17"><img src="./src/assets/img/dinsun.jpg" alt="galeria17"></a></li>
                                    <li><a href="#img18"><img src="./src/assets/img/Sushi.jpg" alt="galeria18"></a></li>
                                    <li><a href="#img19"><img src="./src/assets/img/nigiri.jpg" alt="galeria19"></a></li>
                                    <li><a href="#img20"><img src=".src/assets/img/te%20chino.jpg" alt="galeria20"></a></li>
                                </ul>
                            </article>
                                <div class="modal" id="img1">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Sopa de Aletas de Tiburón</h3>
                                    <div class="imagen">
                                            <a class="flechadireccion" href="#img20">&lt;</a>
                                            <a href="#img2"><img src="src/assets/img/Sopa%20aleta%20de%20tiburon.jpg" alt="galeria1"></a>
                                            <a class="flechadireccion" href="#img2">></a>
                                    </div>
                                </div>
                                <div class="modal" id="img2">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Sopa Agripicante</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img1">&lt;</a>
                                        <a href="#img3"><img src="src/assets/img/Sopa%20agripicante.jpg"alt="galeria2"></a>
                                        <a class="flechadireccion" href="#img3">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img3">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Cerdo Agridulce</h3>
                                    <div class="imagen">
                                            <a class="flechadireccion" href="#img2">&lt;</a>
                                            <a href="#img4"><img src="src/assets/img/Cerdo-agridulce.jpg"alt="galeria3"></a>
                                            <a class="flechadireccion" href="#img4">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img4">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Rollitos Vietnam</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img3">&lt;</a>
                                        <a href="#img5"><img src="src/assets/img/Rollo%20vietnam.jpg"alt="galeria4"></a>
                                        <a class="flechadireccion" href="#img5">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img5">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Langostinos Conbao</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img4">&lt;</a>
                                        <a href="#img6"><img src="src/assets/img/Langostinos%20picante.jpg"alt="galeria5"></a>
                                        <a class="flechadireccion" href="#img6">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img6">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Tallarines Fritos</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img5">&lt;</a>
                                        <a href="#img7"><img src="src/assets/img/chow-mein.jpg"alt="galeria6"></a>
                                        <a class="flechadireccion" href="#img7">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img7">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Dumplings</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img6">&lt;</a>
                                        <a href="#img8"><img src="src/assets/img/dumplings.jpg"alt="galeria7"></a>
                                        <a class="flechadireccion" href="#img8">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img8">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Arroz Frito Tres Delicias</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img7">&lt;</a>
                                        <a href="#img9"><img src="src/assets/img/Arroz%20frito.jpg"alt="galeria8"></a>
                                        <a class="flechadireccion" href="#img9">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img9">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Pollo al Limón</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img8">&lt;</a>
                                        <a href="#img10"><img src="src/assets/img/pollo%20al%20limon.jpg"alt="galeria9"></a>
                                        <a class="flechadireccion" href="#img10">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img10">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Pollo con Almendras</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img9">&lt;</a>
                                        <a href="#img11"><img src="src/assets/img/Pollo%20con%20almendras.jpg"alt="galeria10"></a>
                                        <a class="flechadireccion" href="#img11">></a>                                        </div>
                                    </div>
                            <div class="modal" id="img11">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Pato Pekín</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img10">&lt;</a>
                                        <a href="#img12"><img src="src/assets/img/pato%20pekin.jpg"alt="galeria11"></a>
                                        <a class="flechadireccion" href="#img12">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img12">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Costillas Agridulce</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img11">&lt;</a>
                                        <a href="#img13"><img src="src/assets/img/Costillas%20agridulces.jpg"alt="galeria12"></a>
                                        <a class="flechadireccion" href="#img13">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img13">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Cerdo Asado Cha Siu</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img12">&lt;</a>
                                        <a href="#img14"><img src="src/assets/img/Cerdo%20asado%20cha%20siu.jpg"alt="galeria13"></a>
                                        <a class="flechadireccion" href="#img14">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img14">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Pollo con Bambu y Setas Chinas</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img13">&lt;</a>
                                        <a href="#img15"><img src="src/assets/img/pollo-con-bambu-y-setas-chinas.jpg"alt="galeria14"></a>
                                        <a class="flechadireccion" href="#img15">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img15">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Ternera en Salsa de Ostras</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img14">&lt;</a>
                                        <a href="#img16"><img src="src/assets/img/Ternera%20en%20salsa%20de%20ostras.jpg"alt="galeria15"></a>
                                        <a class="flechadireccion" href="#img16">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img16">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Pollo Conbao</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img15">&lt;</a>
                                        <a href="#img17"><img src="src/assets/img/pollo%20conbao.jpg"alt="galeria16"></a>
                                        <a class="flechadireccion" href="#img17">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img17">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Dinsun</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img16">&lt;</a>
                                        <a href="#img18"><img src="src/assets/img/dinsun.jpg"alt="galeria17"></a>
                                        <a class="flechadireccion" href="#img18">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img18">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Surtido de Sushi</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img17">&lt;</a>
                                        <a href="#img19"><img src="src/assets/img/Sushi.jpg"alt="galeria18"></a>
                                        <a class="flechadireccion" href="#img19">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img19">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Surtido de Sushi</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img18">&lt;</a>
                                        <a href="#img20"><img src="src/assets/img/nigiri.jpg"alt="galeria19"></a>
                                        <a class="flechadireccion" href="#img20">></a>
                                    </div>
                                </div>
                            <div class="modal" id="img20">
                                    <a class="cerrar" href="index.php#galeria">X</a>
                                        <h3>Té Chino</h3>
                                    <div class="imagen">
                                        <a class="flechadireccion" href="#img19">&lt;</a>
                                        <a href="#img1"><img src="src/assets/img/te%20chino.jpg"alt="galeria20"></a>
                                        <a class="flechadireccion" href="#img1">></a>
                                    </div>
                                </div>
                <sidebar>
                    <article class="page-takeaway"><a name="takeaway" id="takeaway"></a>
                        <h2>TAKE AWAY </h2>
                        <h3>COMIDA A DOMICILIO</h3>
                        <p>¿Acabas de salir de trabajar estas cansado y no tienes ganas de cocinar?</p>
                        <p> Ningún problema, nosotros te lo llevamos a cualquier parte de Alhaurín de la torre,</p>
                        <p>tú solo échate en el sofa a ver la tele.</p>
                        <p>¡Nosotros nos ocupamos de todo!</p>

                        <p>Solo llámanos y podrás disfrutar de los aromas y sabores de china en tu casa,</p>
                        <p>la oficina, con tu pareja, con los amigos, la famila ¡Donde quieras y con quien quieras! <p>
                        <p>¿A qué esperas para llamar?</p>
                        <h3><i class="fas fa-phone-alt"></i><a class="text" href="tel:952960317">952 960 317</a></h3>
                    </article>
                </sidebar>
                </section>
            </main>
        </div>
            <footer class="page-footer">
                <?php include('include/footer.php') ?>
            </footer>
    </body>
</html>