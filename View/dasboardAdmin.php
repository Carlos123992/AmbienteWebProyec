<?php 
   include_once 'Generales.php';
  ?> 

<!DOCTYPE html>

<head>
<?php 
headerG();
?>
</head>

<body>


    <?php 
        CargarMenu();
    ?>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?> <a href="inicio.php"> / Inicio</a></li>
            </ol>

            <div class="templatemo-panels">

                <div class="row">
                    <div class="col-md-3 margin-bottom-15">

                    </div>

                    <div class="col-md-3 margin-bottom-15">

                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php 
        modal();
    ?>

<footer class="site-footer">
<?php
      footerC();
      ?>
</footer>

</body>
</html>