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
    <?php
    menuC();
    ?>
  </div>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="inicio.php">Pantalla Incio</a> <span class="mx-2 mb-0">/</span>
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