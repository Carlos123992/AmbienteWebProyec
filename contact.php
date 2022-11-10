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
                      <a href="index.php" class="js-logo-clone"><strong class="text-primary">Vida</strong>Natural</a>
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
                  <a href="cartphp" class="icons-btn d-inline-block bag">
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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Pantalla Incio</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contacto</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container text-container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5 ">
                <h3  class="footer-heading mb-4">Información para contacto </h3>
                <ul class="list-unstyled">
                  <li   class="address">Tejar, El Guarco, Costa Rica</li>
                  <li class="phone"><a href="tel://8697 5160">
                    +506 8697 5160</a></li>
                  <li  class="email">macrovidanaturalcr@gmail.com</li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-black mb-4">Sucursal</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Cartago</span>
              <p class="mb-0"> Tejar, El Guarco, Costa Rica</p>
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
  </body>

    <?php 
   
    ?>

  

</body>

</html>