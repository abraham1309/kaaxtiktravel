<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Viaja a los mejores hoteles de Cancún, la Riviera Maya, República Dominicana y más. Kaaxtik Travel es la única agencia certificada para canjear su certificado de vacaciones.">
    <meta name="keywords" content="Viajes, viajes largos, viajes cortos, promociones, paquetes, tours, circuitos, paquetes hotel más avión, hoteles con ofertas, meses sin intereses, vuelos económicos, experiencias VIP, Tarjetas de regalo, certificados de regalo, regalo virtual.">
    <title>Contáctanos : Kaaxtik Travel</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- COMMON CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/ajax_origi.js"></script>

</head>

<body>
    <?php include("template/navbar.php") ?>
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Contáctanos</h1>
                <p>Queremos que su experiencia siempre sea increíble. </p>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="index.php">Inicio</a>
                    </li>
                    <li>Contáctanos</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8">
                    <div class="form_title">
                        <h3><strong><i class="icon-pencil"></i></strong>Complete el siguiente formulario</h3>
                        <p>
                            Estamos escuchando todo lo que tiene que decir y aprendiendo de usted.
                        </p>
                    </div>
                    <div class="step" id="ver_send">

                        <div id="message-contact"></div>
                        <form method="post" action="assets/contact.php" id="contactform">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Ingrese su nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Ingrese su apellido">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Ingrese su email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Teléfono</label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Ingrese su teléfono">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Mensaje</label>
                                        <textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Escriba su mensaje" style="height:200px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Verificación humana</label>
                                    <input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Eres humano? 3 + 1 =">
                                    <input type="button" onclick="send_contact()" value="Enviar" class="btn_1" id="submit-contact">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-8 -->

                <div class="col-md-4">
                    <div class="box_style_1">
                        <span class="tape"></span>
                        <h4>Ubicacion <span><i class="icon-pin pull-right"></i></span></h4>
                        <p>
                            Cancún, Q. Roo, Mexico
                        </p>
                        <hr>
                        <h4>Preguntas <span><i class="icon-help pull-right"></i></span></h4>
                        <p>
                            Visite nuestra sección de Preguntas frecuentes para ver las respuestas a las preguntas y dudas expresadas por clientes anteriores haciendo click aqui:
                            <a href="preguntas.php">Preguntas Frecuentes</a>
                        </p>
                        <ul id="contact-info">
                            <li>+52 998 407 7963</li>
                            <li><a href="mailto:info@kaaxtiktravel.com">info@kaaxtiktravel.com</a>
                            </li>
                        </ul>
                    </div>



                    <div class="box_style_4">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>¿Necesitas <span> ayuda? </span></h4>
                        <a href="tel://+529984077963" class="phone">+52  998 407 7963</a>
                        <small>Lunes a Viernes 9.00 a 19.30 hrs.</small>
                    </div>
                </div>
                <!-- End col-md-4 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->

    </main>
    <!-- End main -->

    <?php include("template/footer.php") ?>

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- Common scripts -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>


</body>

</html>