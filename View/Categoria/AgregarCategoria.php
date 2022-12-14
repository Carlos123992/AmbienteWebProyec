<?php
    include_once 'GeneralesCategoria.php';
    include_once '../../Controller/CategoriaController.php';
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
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo">
                    <span>Vida Natural</span></a></header>
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
                            <h1>Agregar Categoria</h1>
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
                                    <label for="lblDescripcion" class="control-label">Descripcion</label>
                                    <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion">
                                </div>
                                <div class="col-md-1 margin-bottom-15"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8 margin-bottom-15"></div>
                                <div class="col-md-3 margin-bottom-15">
                                    <input type="submit" class="btn btn-info" value="Procesar" id="btnAgregar" name="btnAgregar" style="width:110px">
                                    <a href="dashCategoria.php"><button type="button"class="btn btn-danger" style="margin-bottom: 18px;">Cancelar</button></a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>