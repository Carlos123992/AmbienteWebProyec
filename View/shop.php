<?php 
 include_once 'Generales.php';
 include_once '../Controller/ProductoController.php';
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
      <div class="col-md-12 mb-0"><a href="inicio.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
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
  <h3>Próximamente lista de productos</h3> 
    

    <div class="row">
    <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID del Producto</th>
                                    <th>Nombre</th>
                                    <th>Predio</th>
                                    <th>Cantidad en tienda</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    CargarProductosInvi();
                                ?>
                            </tbody>
                        </table>
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