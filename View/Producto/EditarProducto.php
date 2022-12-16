<?php
include_once 'GeneralesProducto.php';
include_once '../../Controller/ProductoController.php';
$datos = ConsultarDatosProducto($_GET["q"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerG();
    ?>
</head>

<body>


    <div class="dashboard">
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"> <span>Vida Natural</span></a></header>
            <?php
            menuAdmin();
            ?>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-header'>
                            <h1>Editar Proveedor</h1>
                        </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $datos["id_producto"] ?>" id="txtId" name="txtId">

                        <div class='card-body'>

                            <div class="row">

                                <div class="col-md-4 margin-bottom-15">
                                    <label for="lblNombre" class="control-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                    value="<?php echo $datos["nombre"] ?>">>
                                </div>
                                <div class="row">
                                    <div class="col-6 .col-md-4">
                                        <label for="lblNombre" class="control-label">Precio</label>
                                        <input type="text" style="width: 90%;" class="form-control" id="txtPrecio" name="txtPrecio"
                                        value="<?php echo $datos["precio"] ?>">

                                    </div>

                                    <div class="col-md-4 margin-bottom-15">
                                        <label for="lblNombre" class="control-label">Cantidad</label>
                                        <br>
                                        <br>
                                        <input type="number" class="form-control" id="cmbCantidad" name="cmbCantidad" autocomplete="Off" required min="1"
                                        value="<?php echo $datos["cantidad"] ?>">

                                    </div>

                                </div>

                                <div class="col-md-3 margin-bottom-15">
                                    <label for="lblContrasenna" class="control-label">Proveedor</label>
                                    <select style=" width:200px" class="form-control" id="cboProveedor" name="cboProveedor" autocomplete="Off"
                                    value="<?php echo $datos["id_proveedor"] ?>">

                                        <?php
                                        CargarProveedores($datos["nombre"]);
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6 margin-bottom-15">
                                    <label for="lblContrasenna" class="control-label">Categoria</label>
                                    <select style=" width:200px" class="form-control" id="cboCategoria" name="cboCategoria" autocomplete="Off">

                                        <?php
                                        CargarCategorias($datos["nombre"]);
                                        ?></select>
                                </div>
                            </div>

                            <br>
                            <div class="col-md-8 margin-bottom-15"></div>
                            <div class="col-md-3 margin-bottom-15">
                                <input type="submit" class="btn btn-info" value="Procesar" id="btnActualizar" name="btnActualizar" style="width:110px">
                                <a href="dashProveedores.php"><button type="button" class="btn btn-danger" style="margin-bottom: 18px;">Cancelar</button></a>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    </div>