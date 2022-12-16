<?php 
 include_once 'Generales.php';
 include_once '../Controller/ContactoEmpController.php';
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
                    <div>
                        <div class="block-5 mb-5 ">
                            <div class='container'>
                                <div class='card'>
                                    <div class='card-header'>
                                        <h1>Solicitud de Contacto Empresarial</h1>
                                    </div>
                                    <form action="" method="post">
                                        <br /><br />
                                        <div class="row">
                                            <div class="col-md-1 margin-bottom-15"></div>
                                            <div class="col-md-3 margin-bottom-15">
                                                <label for="lblNombre" class="control-label">Nombre</label>
                                                <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                                            </div>
                                            <div class="col-md-1 margin-bottom-15"></div>
                                            <div class="col-md-3 margin-bottom-15">
                                                <label for="lblDireccion" class="control-label">Direccion</label>
                                                <input type="text" class="form-control" id="txtDireccion"
                                                    name="txtDireccion">
                                            </div>
                                            <div class="col-md-1 margin-bottom-15"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 margin-bottom-15"></div>
                                            <div class="col-md-3 margin-bottom-15">
                                                <label for="lblTelefono" class="control-label">Telefono</label>
                                                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
                                            </div>
                                            <div class="col-md-1 margin-bottom-15"></div>
                                            <div class="col-md-3 margin-bottom-15">
                                                <label for="lblCorreo" class="control-label">Correo</label>
                                                <input type="text" class="form-control" id="txtCorreo" name="txtCorreo">
                                            </div>
                                            <div class="col-md-1 margin-bottom-15"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 margin-bottom-15"></div>
                                            <div class="col-md-3 margin-bottom-15">
                                                <label for="lblProductos" class="control-label">Productos</label>
                                                <textarea rows="3" class="form-control" id="txtProductos" name="txtProductos" style="width:670px;"></textarea>
                                            </div>
                                            <div class="col-md-1 margin-bottom-15"></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8 margin-bottom-15"></div>
                                            <div class="col-md-3 margin-bottom-15">
                                                <input type="submit" class="btn btn-info" value="Procesar"
                                                    id="btnAgregar" name="btnAgregar" style="width:110px">
                                                <a href="dashProveedores.php"><button type="button"
                                                        class="btn btn-danger"
                                                        style="margin-bottom: 18px;">Cancelar</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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