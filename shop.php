<?php 
 include_once 'Generales.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php 
headerG();
?>

<body>
<div class="site-wrap">
    <?php
    menuC();
    ?>
  </div>


<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <h3>Productos </h3> 
</div>
<div class="site-section bg-light">
  <div class="container">
    
    

    <div class="row">
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <span class="onsale">Sale</span>
        <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Bioderma</a></h3>
        <p class="price"><del>95.00</del> &mdash; $55.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Chanca Piedra</a></h3>
        <p class="price">$70.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
        <p class="price">$120.00</p>
      </div>

      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">

        <a href="shop-single.php"> <img src="images/product_04.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Cetyl Pure</a></h3>
        <p class="price"><del>45.00</del> &mdash; $20.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="shop-single.php"> <img src="images/product_05.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">CLA Core</a></h3>
        <p class="price">$38.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <span class="onsale">Sale</span>
        <a href="shop-single.php"> <img src="images/product_06.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Poo Pourri</a></h3>
        <p class="price"><del>$89</del> &mdash; $38.00</p>
      </div>

      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <span class="onsale">Sale</span>
        <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Bioderma</a></h3>
        <p class="price"><del>95.00</del> &mdash; $55.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Chanca Piedra</a></h3>
        <p class="price">$70.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
        <p class="price">$120.00</p>
      </div>
      
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
      
        <a href="shop-single.php"> <img src="images/product_04.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Cetyl Pure</a></h3>
        <p class="price"><del>45.00</del> &mdash; $20.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="shop-single.php"> <img src="images/product_05.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">CLA Core</a></h3>
        <p class="price">$38.00</p>
      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <span class="onsale">Sale</span>
        <a href="shop-single.php"> <img src="images/product_06.png" alt="Image"></a>
        <h3 class="text-dark"><a href="shop-single.php">Poo Pourri</a></h3>
        <p class="price"><del>$89</del> &mdash; $38.00</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <div class="site-block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
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