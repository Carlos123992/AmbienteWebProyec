<?php 
   include_once 'Generales.php';
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
<?php 
headerG();
?>
</head>

<body>
<div class="site-wrap">

<div class="site-navbar py-2">
    <div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="index.php" class="js-logo-clone"><strong class="text-primary">VIDA</strong>Natural</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="shop.php">Tienda</a></li>
                        <li class="has-children">
                            <a href="#">Productos</a>
                            <ul class="dropdown">
                                <li><a href="#">Suplementos</a></li>
                                <li class="has-children">
                                    <a href="#">Vitaminas</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Suplementos</a></li>
                                        <li><a href="#">Vitaminas</a></li>
                                        <li><a href="#">Dieta &amp; Nutricion</a></li>
                                        <li><a href="#">Te &amp; Cafe</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dieta &amp; Nutricion</a></li>
                                <li><a href="#">Te &amp; Cafe</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">Acerca de</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                        <li><a href="contact.php">Registrarse</a></li>
                        <li><a href="contact.php">Ingresar</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icons">
                <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                <a href="cart.php" class="icons-btn d-inline-block bag">
                    <span class="icon-shopping-bag"></span>
                    <span class="number">2</span>
                </a>
                <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
                    <span class="icon-menu"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php 
menuC();
?>

<div class="owl-carousel owl-single px-0">
    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto align-self-center">
                    <div class="site-block-cover-content text-center">
                        <h1 class="mb-0"><strong class="text-primary">Vida Natural</strong> Abierto las 24 Horas</h1>
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-6 text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-primary px-5 py-3">Compra Ahora</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto align-self-center">
                    <div class="site-block-cover-content text-center">
                        <h1 class="mb-0">Nuevos Medicamentos <strong class="text-primary">Todo los Dias</strong></h1>
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-6 text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-primary px-5 py-3">Compra Ahora</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="feature">
                    <span class="wrap-icon"><img src="images/doctor2.png" style="width:50px; height:50px; margin-top:10px"/></span>
                    <h3><a href="#">Personal Profesional</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
                    <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Saber mas</span> <span class="icon-keyboard_arrow_right"></span></a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature">
                    <span class="wrap-icon flaticon-medicine"></span>
                    <h3><a href="#">Nuevos Medicamentos Todo los Dias</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
                    <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Saber mas</span> <span class="icon-keyboard_arrow_right"></span></a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature">
                    <span class="wrap-icon flaticon-test-tubes"></span>
                    <h3><a href="#">Resultados Garantizados</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
                    <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Saber mas</span> <span class="icon-keyboard_arrow_right"></span></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2>Farmacia <strong class="text-primary">Productos</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 Productos-wrap">
                <div class="nonloop-block-3 owl-carousel">
                    <div class="text-center item mb-4 item-v2">
                        <span class="onsale">Sale</span>
                        <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>
                    <div class="text-center item mb-4 item-v2">
                        <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>
                    <div class="text-center item mb-4 item-v2">
                        <span class="onsale">Sale</span>
                        <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>
                    <div class="text-center item mb-4 item-v2">
                        <a href="shop-single.php"> <img src="images/product_04.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <h3 class="text-white">Registrese para obtener hasta un 55% de DESCUENTO</h3>
                <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam.</p>
                <p class="mb-0"><a href="#" class="btn btn-outline-white">Registrarse</a></p>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="title-section">
                    <h2>Como <strong class="text-primary">Encontrarnos</strong></h2>
                </div>
                <div class="block-3 Productos-wrap">
                    <div class="owl-single no-direction owl-carousel">
                        <div class="testimony">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.595240176378!2d-84.15372615154563!3d10.001119235963582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fa5b574921f9%3A0x7453fedea64c5a33!2sMacrobiotica%20Vida%20Natural!5e0!3m2!1sen!2scr!4v1664505938733!5m2!1sen!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="title-section">
                    <h2 class="mb-5">¿Por que <strong class="text-primary">Nosotros?</strong></h2>
                    <div class="step-number d-flex mb-4">
                        <span>1</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
                    </div>
                    <div class="step-number d-flex mb-4">
                        <span>2</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
                    </div>
                    <div class="step-number d-flex mb-4">
                        <span>3</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="site-footer">
<?php
      footerC();
      ?>
</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
<script src="../View/js/login.js"></script>
  </body>

    <?php 
   
    ?>



</body>

</html>