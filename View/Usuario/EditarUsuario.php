<?php
    include_once 'GeneralesUsuario.php';
    include_once '../../Controller/UsuarioController.php';

    $datos = ConsultarDatosUsuario($_GET["q"]);
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
                            <h1>Editar Usuario</h1>
                        </div>
                        <form action="" method="post">
                            <br /><br />
                            <input type="hidden" value="<?php echo $datos["id_usuario"] ?>" id="txtId" name="txtId">
                            <div class="row">
                                <div class="col-md-1 margin-bottom-15"></div>
                                <div class="col-md-3 margin-bottom-15">
                                    <label for="lblNombre" class="control-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                        value="<?php echo $datos["nombre"] ?>">
                                </div>
                                <div class="col-md-1 margin-bottom-15"></div>
                                <div class="col-md-3 margin-bottom-15">
                                    <label for="lblApellido" class="control-label">Apellido</label>
                                    <input type="text" class="form-control" id="txtApellido" name="txtApellido"
                                        value="<?php echo $datos["apellido"] ?>">
                                </div>
                                <div class="col-md-1 margin-bottom-15"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 margin-bottom-15"></div>
                                <div class="col-md-3 margin-bottom-15">
                                    <label for="lblCorreo" class="control-label">Correo</label>
                                    <input type="text" class="form-control" id="txtCorreo" name="txtCorreo"
                                        value="<?php echo $datos["correo"] ?>">
                                </div>
                                <div class="col-md-1 margin-bottom-15"></div>
                                <div class="col-md-3 margin-bottom-15">
                                    <label for="lblPassword" class="control-label">Password</label>
                                    <input type="text" class="form-control" id="txtPassword" name="txtPassword"
                                        value="<?php echo $datos["password"] ?>">
                                </div>
                                <div class="col-md-1 margin-bottom-15"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-8 margin-bottom-15"></div>
                                <div class="col-md-3 margin-bottom-15">
                                    <input type="submit" class="btn btn-info" value="Procesar" id="btnActualizar" name="btnActualizar" style="width:110px">
                                    <a href="dashUsuarios.php"><button type="button"class="btn btn-danger" style="margin-bottom: 18px;">Cancelar</button></a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>