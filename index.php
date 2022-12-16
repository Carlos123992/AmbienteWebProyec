<?php 
  include_once __DIR__ . '\View\Generales.php';
  include_once __DIR__ . '\Controller\UsuarioController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Inicio de Sesion</title>
 <?php
 headerLogin()
 ?>

</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="View/images/logo.jpg" width="144" height="144" style="margin-left: 18vh;">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title" style="margin-left:15vh;">Inicio de sesión</h4>
                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="lblCorreo" class="control-label">Correo</label>
                                    <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="" onblur="ValidarDatos();">
                                </div>

                                <div class="form-group">
                                    <label for="lblPass" class="control-label">Contraseña</label>

                                    </label>
                                    <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="">
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <input type="submit" value="Ingresar" id="btnIngresar" name="btnIngresar" class="btn btn-primary btn-block">

                                    </button>
                                </div>
                                <div class="mt-4 text-center">

                                   Quieres ingresar a ver productos

                                    <a href="View/inicio.php">Entrada Usuarios</a>

                                </div>
                            </form>
                        </div>
                    </div>
                    <?php 
        footerLogin();
    ?>
                </div>
            </div>
        </div>
    </section>

    <script src="../View/js/login.js"></script>

</body>

</html>