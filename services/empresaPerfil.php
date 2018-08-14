<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'class.functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
$proveedoresClass  = new proveedoresClass();
$arrayProveedores = array();
$proUid = $_SESSION['proUid'];
$arrayProveedores = $proveedoresClass->getProveedores($proUid);

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo $arrayProveedores[0]['PRO_NOMBRE'] ?></title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="../img/page/e.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Slidea Slider CSS -->
    <link href="../slidea-assets/css/slidea/slidea.css" rel="stylesheet">
    <link href="../slidea-assets/css/slidea/themes/default.css" rel="stylesheet">
    <link href="../slidea-assets/css/slidea/ui/default.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="../css/responsive/responsive.css">

    <!-- Switch Fonts via CSS Import system -->
    <link href="../css/fonts/opensans-greatvibes.css" rel="stylesheet">

    <link href="../css/fonts/poppins.css" rel="stylesheet">
    <link href="../css/fonts/poiret-one.css" rel="stylesheet">
    <style>

    .sticky-container{
        padding:0px;
        margin:0px;
        position:fixed;
        /*right:-170px;*/
        top:230px;
        /*width:15px;*/
        z-index: 1100;
    }
    .sticky li{
        list-style-type:none;
        /*background-color:#fff;*/
        color:#efefef;
        height:43px;
        padding:0px;
        margin:0px 0px 1px 0px;
        -webkit-transition:all 0.25s ease-in-out;
        -moz-transition:all 0.25s ease-in-out;
        -o-transition:all 0.25s ease-in-out;
        transition:all 0.25s ease-in-out;
        cursor:pointer;
    }
    .sticky li:hover{
        margin-right: -15px;
    }
    .sticky li img{
        float:left;
        margin:5px 4px;
        margin-right:5px;
    }       
    .fitness_version .advisor_thumb:after {
        background-color: orange;
        border-bottom: 1px solid #222;
        bottom: 0;
        content: "";
        height: 50px;
        left: 25%;
        position: absolute;
        -webkit-transform: skewX(-45deg);
        transform: skewX(-45deg);
        width: 100%;
        display:none;
    }

    .spa_version .gallery_info p, .spa_version .gallery_info h5, .gallery_area.spa_version .spa_section_heading p, .gallery_area.spa_version .spa_section_heading h2, .spa_version .footer_bottom p > i, .spa_version .footer_bottom p > a:hover {
        color:#000 !important;
    }


    .spa_version .nav-menu li a {
        color: #ffeb3b;
        font-weight: 600;
    }
    .main_header_area.sticky {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        background-color: #000;
    }

    .fitness_version .single_class_slide .time {
        background-color: #ff5722;
        border-radius: 0 0 6px 6px;
        color: #fff;
        font-weight: 900;
        padding: 15px;
        position: absolute;
        right: 19px;
        font-size: 20px;
        top: 0;
        box-shadow: 5px 3px 12px #000;
    }
    
</style>   
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="classy-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area spa_version transparent-menu">
        <div class="main_header_area animated">
            <div class="container">
                <nav id="navigation1" class="navigation bg-transparent">
                    <!-- Logo Area -->
                    <div class="nav-header">
                        <a style="color:white;" class="nav-brand" href="#"><?php echo strtoupper(utf8_encode($arrayProveedores[0]['PRO_NOMBRE'])) ?>.</a>
                        <div class="nav-toggle"></div>
                    </div>
                    <!-- Main Menus Wrapper -->
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu align-to-right" id="nav">
                            <li class="active"><a href="#home">Inicio</a></li>
                            <li><a href="#about">Acerca de nosotros</a></li>
                            <li><a href="#service">Servicios</a></li>
                            <li><a href="#offers">Ofertas</a></li>                            
                            <li><a href="#gallery">Galeria</a></li>                 
                            <li><a href="#contact">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->   
    <section class="welcome_area height-800 clearfix background-overlay jarallax" style="background-image: url(../system/<?php echo $arrayProveedores[0]['PRO_IMAGEN_PORTADA']; ?>);" data-jarallax-image="../system/<?php echo $arrayProveedores[0]['PRO_IMAGEN_PORTADA']; ?>" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="welcome_text text-center">
                        <a href="#offers" class="btn default-button" style= "background-color: yellow; color:black; font-weight: 900;     font-size: 25px;" role="button">Ver Ofertas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    
    <!-- ***** About us Area Start ***** -->
    <section class="spa_about_us_area spa_version section_padding_100_0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <b><h2 style="font-family: Impact">Acerca de Nosotros</h2></b>
                        <p>Maprial, líder en Cochabamba.</p>
                    </div>
                    <?php echo utf8_encode($arrayProveedores[0]['PRO_DESCRIPCION']);?>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                        </div>
                        <div class="col-sm-3">
                            <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                        </div>
                        <div class="col-sm-3">
                            <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                        </div>
                        <div class="col-sm-3">
                            <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Spa Service Area Start ***** -->
    <section class="spa_version spa_services_area section_padding_100" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 style="font-family: Impact">Best Services</h2>
                        <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <!--  Why Choose Text Area Start  -->
                    <div class="spa_services_text_area">
                        <div class="spa_single_service">
                            <h4>Stone Massage</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Aroma Therapy</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-bed" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Reflexology</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Why Choose Image Area Start  -->
                <div class="col-md-6 col-lg-5 ml-lg-auto">
                    <div class="spa_services_text_area second_area">
                        <div class="spa_single_service">
                            <h4>Oil Massage</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-umbrella" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Facial Treatment</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Health Coaching</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Spa Service Area End ***** -->

    <!-- ***** Our Classes Area Start ***** -->
    <section class="our_classes_area fitness_version section_padding_100" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h3>Ofertas <?php echo ucwords(utf8_encode($arrayProveedores[0]['PRO_NOMBRE'])) ?></h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="fitness_class_slides">
                        <?php
                        $arrayOfertas = array();
                        $arrayOfertas = $proveedoresClass->getPromocionPorID($proUid);
                        for ($j=0; $j < count($arrayOfertas); $j++) { 
                            ?>
                            <!-- Single Class Slide -->
                            <div class="single_class_slide">
                                <img data-target="#product_view<?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_UID']); ?>" data-toggle="modal" style = "height:300px;" src="../system/<?php echo $arrayOfertas[$j]['PROMOCION_IMAGEN']; ?>" alt="">
                                <div class="time">
                                    <p><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_VALOR_DESCUENTO']); ?></p>
                                </div>
                                <div style = "text-align: center" class="title">
                                    <h4 style ="font-size:20px; font-weight: 900"><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_TITULO']); ?></h4>
                                </div>
                                <div class="trainer">
                                </div>
                                <div style = "text-align: center" class="description">
                                    <span style="text-decoration: line-through; font-size: 15px; font-weight: 500;"><i class="fa fa-times" aria-hidden="true"></i><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_PRECIO_ANTIGUO']);?> Bs</span> &nbsp; <span style="font-size: 20px; font-weight: 500; color: #840001;"><i class="fa fa-check" aria-hidden="true"></i><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_PRECIO_NUEVO']);?> Bs </span> <span style="font-size: 15px; font-weight: 500;"> &nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_FECHA_VENCIMIENTO']);?> </span>
                                </div>                                
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ***** Our Classes Area End ***** -->

    <?php
        $arrayOfertas = array();
        $arrayOfertas = $proveedoresClass->getPromocionPorID($proUid);
        for ($j=0; $j < count($arrayOfertas); $j++) { 
    ?>
    <div style="font-family: 'Poppins', sans-serif;" class="modal fade product_view" id="product_view<?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_UID']); ?>">
        <div class="modal-dialog" style = "max-width: 800px; width: 100%;">
            <div class="modal-content">
                <div style ="min-height: 16.43px; padding: 15px; border-bottom: 1px solid #e5e5e5; display: block;" class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="fa fa-times"></span></a>
                    <h3 class="modal-title"><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_TITULO']); ?></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="../system/<?php echo $arrayOfertas[$j]['PROMOCION_IMAGEN']; ?>" class="img-responsive">
                        </div>
                        <div class="col-md-6 product_content">
                            <button style = "margin:15px; font-size: 30px; float: left;" type="button" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_VALOR_DESCUENTO']); ?></button>
                            <div class="rating">
                                <?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_FECHA_VENCIMIENTO']);?>
                            </div>
                            <p><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_DESCRIPCION']); ?></p>
                            <h3 class="cost"><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_PRECIO_NUEVO']);?> Bs &nbsp;&nbsp;<small class="pre-cost" style="text-decoration: line-through;"><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_PRECIO_ANTIGUO']);?> Bs</small></h3>
                            <div class="space-ten"></div>
                            <div class="btn-ground">
                                <a target = "_blank" style = "width:100%" type="button" class="btn btn-primary" href='https://api.whatsapp.com/send?phone=<?php echo $arrayOfertas[0]['PRO_WHATSAPP']; ?>&text=Hola, deseo saber más sobre la promoción "<?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_DESCRIPCION']); ?>"'>Contactate &nbsp;<i style = "font-size: 25px;" class="fa fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

    <!-- ***** Trainer 1 Details Area Start ***** -->
    <?php
    $arrayProveedoresGaleria = array();
    $arrayProveedoresGaleria = $proveedoresClass->getProveedoresGaleria();
    for ($j=0; $j < count($arrayProveedoresGaleria); $j++) { 
        ?>
        <div role="dialog" tabindex="-1" id="advisor_details<?php echo $arrayProveedoresGaleria[$j]['PG_UID']; ?>" class="modal fade in animated slideInDown">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Head Start -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="teammodelhead"><?php echo $arrayProveedoresGaleria[$j]['PG_TITULO']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>

                    <!-- Modal Body Start -->
                    <div class="modal_body">
                        <!-- single gallery description start -->
                        <div class="single_gallery_area text-center p-30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="team_advisor_thumb">
                                            <img style="width: 100%; height: 100%" src="../system/<?php echo $arrayProveedoresGaleria[$j]['PG_IMAGEN']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!--  Gallery Details Info -->
                                        <div class="single_team_advisor_info">

                                            <!-- Description -->
                                            <div class="description">
                                                <p><?php echo utf8_encode($arrayProveedoresGaleria[0]['PG_DESCRIPCION']); ?></p>
                                            </div>
                                            <!-- live preview button -->
                                            <div class="live_preview">
                                                <a class="btn btn-pill btn-flat-pumpkin" href="#"><?php echo $arrayProveedoresGaleria[$j]['PG_PRECIO']; ?> Bs</a>
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
    <?php } ?>
    <!-- ***** Trainer Details Area End ***** -->

    <!-- ***** Trainer Area Start ***** -->
    <section class="our_advisor_area fitness_version clearfix section_padding_100_70" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h3>Productos</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="fitness_advisor_slides">
                        <?php
                        $arrayProveedoresGaleria = array();
                        $arrayProveedoresGaleria = $proveedoresClass->getProveedoresGaleria($proUid);
                        for ($j=0; $j < count($arrayProveedoresGaleria); $j++) {                                             
                            ?>
                            <div class="single_advisor">
                                <!-- Single advisor profile thumb -->
                                <div class="advisor_thumb">
                                    <img data-target="#advisor_details<?php echo $arrayProveedoresGaleria[$j]['PG_UID']; ?>" data-toggle="modal" style = "height: 340px; " src="../system/<?php echo $arrayProveedoresGaleria[$j]['PG_IMAGEN']; ?>" alt="">
                                    <!-- Single advisor social link -->                               
                                </div>
                                <!-- Single advisor profile details -->
                                <div class="single_advisor_details_info">
                                    <h4><?php echo $arrayProveedoresGaleria[$j]['PG_TITULO']; ?></h4>
                                    <p><?php echo $arrayProveedoresGaleria[$j]['PG_PRECIO']; ?> Bs</p>
                                    <!-- View More -->
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Trainer Area End ***** -->


<!-- Classy Rating -->
    <!--<div class="classy-star-three">
        <fieldset>
            <input type="radio" id="c-star5" name="rating" value="5"><label for="star5" title="Outstanding">5 stars</label>
            <input type="radio" id="c-star4" name="rating" value="4"><label for="star4" title="Very Good">4 stars</label>
            <input type="radio" id="c-star3" name="rating" valuSe="3"><label for="star3" title="Good">3 stars</label>
            <input type="radio" id="c-star2" name="rating" value="2"><label for="star2" title="Poor">2 stars</label>
            <input type="radio" id="c-star1" name="rating" value="1"><label for="star1" title="Very Poor">1 star</label>
        </fieldset>
    </div>-->

    <div class="map_contact_address_area">
        <!-- Map Area Start -->
        <div class="map_area" id="googleMap"></div>
    </div>
    <!-- ***** Message Now Area Start ***** -->   

    <section class="faq_question_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Section Heading Start -->
                    <div class="section_heading text-left">
                        <h3>Frequently asked questions</h3>
                    </div>
                    <!-- FAQ Area Start -->
                    <div class="faq_area">
                        <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How can I contact for support?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                <div id="collapseOne" class="accordion-content collapse">
                                    <p>Please go to our profile page. Then mail us. We will reply you within 24 Hours.</p>
                                </div>
                            </div>

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="two" data-parent="#accordion" data-toggle="collapse" href="#two">Contact form active?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                <div id="two" class="accordion-content collapse">
                                    <p>Yes, the contact form is active. First open the mail.php file. Then remove the default mail address & placed your mail address.</p>
                                </div>
                            </div>

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" aria-expanded="true" aria-controls="three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#three">Can I use my own font in this template? 
                                     <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                <div id="three" class="accordion-content collapse">
                                    <p>Sure, we used google fonts library. You can use your desire fonts.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="testimonials_area m-xs-top-30">
                        <div class="testimonials">
                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="img/advisor-img/tes-1.jpg" alt="">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <p>Classy - is an awesome template. It's design looks pretty good. Code is really clean. Explained Documentation, Fast &amp; beautiful.</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>Yasin Rahman</h5>
                                    <h6>WrapBootstrap User</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="img/advisor-img/tes-2.jpg" alt="">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <p>Theme is very good. Support is fast &amp; helpful. Thank you.</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>Rafiqul Islam</h5>
                                    <h6>WrapBootstrap User</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="img/advisor-img/tes-3.jpg" alt="">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <p>Fast, neat and beautiful. Nailed it!</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>Lim Sarah</h5>
                                    <h6>WrapBootstrap User</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sticky-container">
        <ul class="sticky" style="background-color:black;">
            <li style="background-color: #45619D; border-radius: 0px;">
                <a style = "background-color: black !important;" href="http://www.facebook.com/<?php echo $arrayProveedores[0]['PRO_MESSENGER']; ?>" target="_blank">
                    <img src="../img/social-icons/if_facebook.png" width="32" height="32">
                </a>
            </li>
            <li style="background-color: #427AB6;border-radius: 0px;">
                <a style = "background-color: black !important;" href="http://m.me/<?php echo $arrayProveedores[0]['PRO_MESSENGER']; ?>" target="_blank">
                    <img src="../img/social-icons/if_messenger.png" width="32" height="32">                
                </a>
            </li>
            <li style="background-color: #57BB63; border-radius: 0px;">
                <a style = "background-color: black !important;" href="https://api.whatsapp.com/send?phone=<?php echo $arrayProveedores[0]['PRO_WHATSAPP']; ?>&text=Hola, quiero contactarme con ustedes!" target="_blank">
                    <img src="../img/social-icons/if_whatsapp.png" width="32" height="32">
                </a>
            </li>
        </ul>
    </div>

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- Slidea Slider JS -->
    <script src="../slidea-assets/js/gsap/tweenlite.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/gsap/plugins/css.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/gsap/easing/easepack.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/animus/animus.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/animus/presets/default.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/hammer/hammer.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/mousewheel/mousewheel.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/vimeo/vimeo.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/youtube/youtube.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/slidea/slidea.js" type="text/javascript"></script>
    <!-- Slider Active JS  -->
    <script src="../slidea-assets/js/templates/fitness-slider-active.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="../js/include-all-plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    <!-- Slider Active JS  -->
    <script src="../slidea-assets/js/templates/spa-slider-active.js" type="text/javascript"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>
    <!-- Google Maps Active js -->
    <script src="../js/google-map/map-active.js"></script>
    <script>
        $('.main_header_area.sticky').css('background-color', '<?php echo $arrayProveedores[0]['PRO_COLOR_FONDO'] ?>');
        $('.spa_version .spa_service_icon').css('color', '#000');
        $('.spa_version .spa_service_icon').css('background-color', '#ffeb3b');
        $('.gallery_area.spa_version').css('background-color', '#ffeb3b');    
        $('.single_advisor').css('background-color', '#ffeb3b');             
        $('.spa_version .single_advisor_details_info > h4, .spa_version .single_advisor_details_info > p').css('color', '#000'); 
    </script>
</body>

</html>