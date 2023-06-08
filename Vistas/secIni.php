<?php
include("../persistencia/secion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="estiloSecIni.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bienvenido</title>
</head>

<body>
    <div class="principal">
        <header class="header">
            <div class="usuario">
                <div class="cntContact">
                    <div class="correo">
                        <img src="ImgIndex/sobre.png">
                        <a href="">
                            starguit@gmail.com
                        </a>
                    </div>

                    <div class="numero">
                        <img src="ImgIndex/whatsapp.png">
                        <a href="https://web.whatsapp.com">
                            477 725 0511
                        </a>

                    </div>

                    <div class="contacto">
                        <a href="https://www.facebook.com">
                            <img src="ImgIndex/facebook.png">
                        </a>
                        <a href="https://www.instagram.com">
                            <img src="ImgIndex/Instagram.png">
                        </a>

                    </div>


                </div>

                <div class="cntRegister">
                    <div class="registro">
                        <a id="imgUsser" href="#">
                            <img src="ImgIndex/registro.png">
                        </a>
                        <div id="usserOptions">
                            <ul>
                                <li>
                                    <a href="../pruebas/pruCerrarsecion.php">Cerrar Seción</a>
                                </li>
                                <li>
                                    <a href="/Vistas/modUsser.php">Configuración</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <span>
                        <?php
                        echo $_SESSION["name"];
                        // echo $_SESSION["name"];
                        
                        ?>
                    </span>
                </div>

            </div>

            <div class="busqueda">
                <div class="logo">
                    <img src="ImgIndex/logoPru.png" alt="">
                    <h2 class="nameSite">STARGUIT</h2>
                </div>

                <div class="brrBusqd">
                    <input type="text" id="indxSearch" name="indxSearc" placeholder="Buscar...">
                </div>

                <div class="mnuPrin">
                    <nav>

                        <ul class="mnu-product">
                            <li>
                                <span>
                                    <a
                                        href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasGeneral.html">GUITARRAS</a>
                                </span>

                                <div class="mnu-gtarras">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasElectricas.html">GUITARRAS
                                                    ELECTRICAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/guitarrasAcusticas.html">ACUSTICAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/requinto.html">REQUINTO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/ukelele.html">UKELELE</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/guitarras/Accesorios.html">ACCESORIÓS</a>
                                            </span>
                                        </li>
                                    </ul>

                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/bajosGeneral.html">BAJOS</a>
                                </span>

                                <div class="mnu-bajos">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/Bajoelectrico.html">BAJO
                                                    ELECTRICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/seccionBajos/bajoAcustico.html">BAJO
                                                    ELECTROACÚSTICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionBajos/amplificadores.html">AMPLIFICADORES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <span>
                                    <a
                                        href="/proyecto/Proyecto_web/Vistas/percusiones/percusionesGeneral.html">PERCUCIONES</a>
                                </span>

                                <div class="mnu-prcuciones">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Percusiones/baterias.html">BATERÍAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Percusiones/percusiones.HTML">PERCUCIÓNES</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Percusiones/platillos.html">PLATILLOS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionBajos/pedaleras.html">PEDALERAS</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/seccionViento/vientoGeneral.html">VIENTO</a>
                                </span>

                                <div class="mnu-viento">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionViento/trompetas.html">TROMPETAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionViento/flautas.html">FLAUTAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/seccionViento/metales.html">METALES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/audio/audioGeneral.html">AUDIO</a>
                                </span>

                                <div class="mnu-audio">
                                    <ul>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/audio/microfonia.html">MICROFONIA</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/bafles.html">BAFLES ACTIVO
                                                    PASIVO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/mezcladorasConsolas.html">MEZCALDORAS
                                                    Y CONSOLAS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/homeStudio.html">HOME
                                                    STUDIO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/djsets.html">DJ´S SETS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/audio/cables.html">ACCESORIOS,
                                                    CABLES ETC...</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <span>
                                    <a href="/proyecto/Proyecto_web/Vistas/Teclados/tecladosGeneral.html">TECLADOS</a>
                                </span>

                                <div class="mnu-audio">
                                    <ul>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoElectrico.html">PIANO
                                                    ELECTRICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoClasico.html">PIANO
                                                    CLASICO</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a href="/proyecto/Proyecto_web/Vistas/Teclados/pianoControlador.html">PIANO
                                                    CONTROLADOR</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <a
                                                    href="/proyecto/Proyecto_web/Vistas/Teclados/sintetizadores.html">SINTETIZADORES</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="carrito">
                    <img src="ImgIndex/carrito.png" alt="">
                </div>

            </div>

            <section class="banneer">
                <div class="banner-content">

                    <h1>Bienvenido a starguit</h1>
                    <a href="/proyecto/Proyecto_web/Vistas/Percusiones/baterias.html">Ver articulos</a>
                </div>
            </section>




            <section class="full-width formated-section">
                <h2 class="text-center font-oswald" style="color: white">Novedades</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/22.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/25.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/24.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white"> Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>



                    </div>
                </div>
            </section>



            <section class="full-width formated-section">
                <h2 class="text-center font-oswald" style="color: white">Tarolas</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/2.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/6.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/10.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amt, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>



                    </div>
                </div>
            </section>


            <section class="full-width formated-section">
                <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/13.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/12.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/99.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/8.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/20.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/21.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/1.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/14.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/16.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/3.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/4.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/9.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="full-width formated-section">
            <h2 class="text-center font-oswald" style="color: white">Guitarras</h2><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/15.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/20.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/21.jpg" alt="Sucursal" class="img-responsive img-rounded">
                            <h3 class="text-center" style="color: white">Thumbnail label</h3>
                            <p class="text-center" style="color: white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint
                                impedit cum.
                            </p>
                        </div>

                    </div>
                </div>
            
                <hr class="mb-4 text-primary">
                <footer class="bg-black">
                    <div class="container text-center text-md-start">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                                <hr class="mb-4 text-primary">
                                <p style="color: white;">
                                    Tienda donde ofrecemos una amplia variedad de guitarras,
                                    desde clásicas y acústicas hasta eléctricas y de jazz.
                                    Desde los Marzo del 78 cautivando a musicos en mejorar sus
                                    instrumentos tienda especializada en guitarras vintage y únicas,
                                    contamos con una trayectoria historica de décadas pasadas.
                                    Compartía con entusiasmo los detalles y curiosidades con clientes.
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Ayuda</h5>
                                <hr class="mb-4 text-primary">
                                <p><a href="#" class="text-light">Envio</a></p>
                                <p><a href="#" class="text-light">Devolución</a></p>
                                <p><a href="#" class="text-light">Reembolso</a></p>
                                <p><a href="#" class="text-light">Rastrear Pedido</a></p>
                            </div>
                            <div class="col-md-6 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Servicio Cliente</h5>
                                <hr class="mb-4 text-primary">
                                <p><a href="#" class="text-light">Bolsa de empleo</a></p>
                                <p><a href="#" class="text-light">Quejas y sugerencias</a></p>
                                <p><a href="#" class="text-light">Reportar errores</a></p>
                                <p><a href="#" class="text-light">Formas de pago</a></p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
                                <hr class="mb-4 text-primary">
                                <p style="color: white;"><i class="fas fa-home m-3"></i>León, Guanajuato. México</p>
                                <p style="color: white;"><i class="fas fa-envelope m-3"></i>guitar@gmail.com</p>
                                <p style="color: white;"><i class="fas fa-phone m-3"></i>477 890 78 87</p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-4 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Mapa</h5>
                                <hr class="mb-4 text-primary">
                                <div class="text-center">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.785622013856!2d-101.6612489855979!3d21.16154248594438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842be0ce670f2395%3A0x2e5376c6488a5bcb!2sLe%C3%B3n%2C%20Guanajuato%2C%20Mexico!5e0!3m2!1sen!2sus!4v1621642008260!5m2!1sen!2sus"
                                        width="300" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4 text-primary">
                        <div class="text-center mb-2">
                            <p style="color: white;">&copy; Todos los derechos reservados <a href="#"><strong
                                        class="text-primary">1978-2023</strong></a></p>
                        </div>
                        <div class="text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/" class="text-light"><i
                                            class="fab fa-facebook-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.twitter.com/" class="text-light"><i
                                            class="fab fa-twitter-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.youtube.com/" class="text-light"><i
                                            class="fab fa-youtube-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/" class="text-light"><i
                                            class="fab fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.messenger.com/" class="text-light"><i
                                            class="fab fa-facebook-messenger"></i></a></li>
                            </ul>

                        </div>

                    </div>
                </footer>

</body>


</html>