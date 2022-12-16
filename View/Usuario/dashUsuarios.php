<?php
    include_once 'GeneralesUsuario.php';
    include_once '../../Controller/UsuarioController.php';
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
                             <h1>Usuarios</h1>
                         </div>
                         <br>
                         <a href="AgregarUsuario.php" class="btn btn-primary px-5 py-3" style="width: 20%; margin-left:40%;">Agregar</a>
                         <div class='card-body'>
                         
                         <div class="row">
                    <div class="col-md-12 margin-bottom-15">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID del Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo Electrónico</th>
                                    <th>Password</th>
                                    <th>Credito</th>
                                    <th>ID del Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    CargarUsuarios();
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>








     <script src="../View/js/dash.min.js"></script>


 </body>

 </html>