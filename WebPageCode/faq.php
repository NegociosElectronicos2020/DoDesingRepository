<?php
include("conexion.php");
$con = conectarBD();

//echo "Se realizo la conexion exitosamente";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>dotDesign</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sass/faq.scss">
</head>

<body>
    <!--::header part start::-->
    <?php include('header.php'); ?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Preguntas Frecuentes<span></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::about_us part start::-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                        <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                                            <i class="mdi mdi-help-circle"></i> Preguntas Frecuentes
                                        </a>
                                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                                            <i class="mdi mdi-account"></i> Renovación
                                        </a>
                                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                                            <i class="mdi mdi-account-settings"></i> Beneficios
                                        </a>
                                        <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                                            <i class="mdi mdi-heart"></i> Suscripciones
                                        </a>
                                        <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="false">
                                            <i class="mdi mdi-coin"></i> Infracciones
                                        </a>
                                        <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                                            <i class="mdi mdi-help"></i> Licencias de uso
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content" id="faq-tab-content">
                                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                                            <div class="accordion" id="accordion-tab-1">
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">¿El contenido del sitio es gratuito?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>El sitio ofrece una gran cantidad de recursos de uso completamente gratuito, sin embargo, también existen recursos que únicamente están disponibles para su compra o adquisición por suscripción.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">¿Cuál es el límite de descargas?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>El límite de descargas para usuarios sin suscripción es de 10 recursos al día. El límite de descargas se reestablece diariamente a las 23:59:59 en GMT-6.
                                                                Una vez que un usuario sin suscripción descarga 10 recursos en el mismo día no podrá volver a descargar hasta el día siguiente.
                                                                Los usuarios con suscripción no tienen ninguna limitación en las descargas.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-3">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Uso personal de los recursos</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>Está permitido hacer uso de los recursos disponibles en el sitio para uso personal, como elementos de la composición final, sin embargo, los recursos están sujetos a derechos de autor, por lo que no se pueden utilizar de forma comercial a menos que se cuente con la licencia del recurso.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">¿Qué son los recursos de suscripción?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>Los recursos de suscripción son aquellos que están disponibles únicamente para los usuarios suscritos al sitio. Al descargar un recurso de suscripción, en la descarga se incluye una licencia de uso para él usuario.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-5">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">¿Las suscripciones tienen renovación automática?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>Si adquieres una suscripción, sea por el tiempo que sea, el sistema tramita únicamente el cobro por el periodo seleccionado, es decir, no hay renovación automática. Si se desea adquirir nuevamente una suscripción es necesario hacer el pago manualmente.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-6">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-6" aria-expanded="false" aria-controls="accordion-tab-1-content-6">¿Cuáles son los tipos de suscripción?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-6" aria-labelledby="accordion-tab-1-heading-6" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>El sitio cuenta con dos tipos de suscripción, categorizados por duración. Estos tipos de suscripción son los de 1 mes y 12 meses.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-7">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-7" aria-expanded="false" aria-controls="accordion-tab-1-content-7">¿Cuáles son los beneficios de suscribirme?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-7" aria-labelledby="accordion-tab-1-heading-7" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>El siguiente listado muestra los distintos beneficios que gozan los usuarios suscritos al sitio:</p>
                                                            <li>Acceso a todos los recursos disponibles.</li>
                                                            <li>Sin límite de descargas.</li>
                                                            <li>Navegación sin anuncios.</li>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-8">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-8" aria-expanded="false" aria-controls="accordion-tab-1-content-8">¿Para qué sirven las licencias de uso?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-8" aria-labelledby="accordion-tab-1-heading-8" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>Las licencias de uso sirven para poder utilizar un recurso de forma comercial. Estas licencias son características de los recursos exclusivos de suscripción y se descargan junto al recurso. Asegúrese de conservarlas.
                                                                Otro detalle a remarcar es que las licencias son únicas de cada suscripción, así que únicamente puede gozar los beneficios de la licencia quien sea el beneficiario de la suscripción indicada en esta.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-9">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-9" aria-expanded="false" aria-controls="accordion-tab-1-content-9">¿Se pueden seguir utilizando los recursos una vez que se concluye mi suscripción?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-9" aria-labelledby="accordion-tab-1-heading-9" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>En efecto, se pueden seguir utilizando. Cabe recordarle que la mayoría de recursos son de acceso gratuito, y los que no lo son, tienen una licencia de uso consigo. Conserve esta licencia para poder seguir utilizando los recursos de suscripción que haya descargado.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-10">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-10" aria-expanded="false" aria-controls="accordion-tab-1-content-10">¿Cómo puedo recuperar mi contraseña?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-10" aria-labelledby="accordion-tab-1-heading-10" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>Si ha olvidado su contraseña puede ponerse en contacto con los encargados del sitio, enviando un mensaje explicando su problema a cualquiera de las redes proporcionadas (por ejemplo, Facebook).</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-1-heading-11">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-11" aria-expanded="false" aria-controls="accordion-tab-1-content-11">Infracciones de derechos de autor</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="accordion-tab-1-content-11" aria-labelledby="accordion-tab-1-heading-11" data-parent="#accordion-tab-1">
                                                        <div class="card-body">
                                                            <p>Todos los usuarios están advertidos acerca de los usos no permitidos para los recursos disponibles. En caso de cometer una infracción de derechos de autor se arriesga a que se emprendan acciones legales en caso de que el contenido que cumple con la infracción no sea eliminado de manera inmediata.
                                                                Apenas se conozca acerca de una infracción se contactará con el responsable para informarle las consecuencias a las que puede enfrentarse en caso de no cumplir con la petición de eliminar el contenido.
                                                                Por favor, si conoce de algún caso en que se infrinjan los derechos de autor del sitio, contáctenos mediante alguno de los medios disponibles con pruebas adjuntas para poder tomar las acciones correspondientes.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                                            <div class="accordion" id="accordion-tab-2">
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-2-heading-1">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">¿Las suscripciones tienen renovación automática?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                                        <div class="card-body">
                                                            <p>por el periodo seleccionado, es decir, no hay renovación automática. Si se desea adquirir nuevamente una suscripción es necesario hacer el pago manualmente.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                                            <div class="accordion" id="accordion-tab-3">
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-3-heading-1">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">¿Cuáles son los beneficios de suscribirme?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                                        <div class="card-body">
                                                            <p>El siguiente listado muestra los distintos beneficios que gozan los usuarios suscritos al sitio:
                                                                ° Acceso a todos los recursos disponibles.
                                                                ° Sin límite de descargas.
                                                                ° Navegación sin anuncios.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                                            <div class="accordion" id="accordion-tab-4">
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-4-heading-1">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">¿Cuáles son los tipos de suscripciones?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                                        <div class="card-body">
                                                            <p>El sitio cuenta con dos tipos de suscripción, categorizados por duración. Estos tipos de suscripción son los de 1 mes y 12 meses.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                                            <div class="accordion" id="accordion-tab-5">
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-5-heading-1">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-1" aria-expanded="false" aria-controls="accordion-tab-5-content-1">Infracciones de derechos de autor</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="accordion-tab-5-content-1" aria-labelledby="accordion-tab-5-heading-1" data-parent="#accordion-tab-5">
                                                        <div class="card-body">
                                                            <p>Todos los usuarios están advertidos acerca de los usos no permitidos para los recursos disponibles. En caso de cometer una infracción de derechos de autor se arriesga a que se emprendan acciones legales en caso de que el contenido que cumple con la infracción no sea eliminado de manera inmediata.
                                                                Apenas se conozca acerca de una infracción se contactará con el responsable para informarle las consecuencias a las que puede enfrentarse en caso de no cumplir con la petición de eliminar el contenido.
                                                                Por favor, si conoce de algún caso en que se infrinjan los derechos de autor del sitio, contáctenos mediante alguno de los medios disponibles con pruebas adjuntas para poder tomar las acciones correspondientes.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                                            <div class="accordion" id="accordion-tab-6">
                                                <div class="card">
                                                    <div class="card-header" id="accordion-tab-6-heading-1">
                                                        <h5>
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">¿Para qué sirven las licencias de uso?</button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                                                        <div class="card-body">
                                                            <p>Las licencias de uso sirven para poder utilizar un recurso de forma comercial. Estas licencias son características de los recursos exclusivos de suscripción y se descargan junto al recurso. Asegúrese de conservarlas.
                                                                Otro detalle a remarcar es que las licencias son únicas de cada suscripción, así que únicamente puede gozar los beneficios de la licencia quien sea el beneficiario de la suscripción indicada en esta.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->

    <!--::review_part part end::-->
    <?php include('footer.php'); ?>
    <!--::footer_part start::-->
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/jquery.filterizr.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>