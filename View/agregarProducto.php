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

                 <div style="text-align: left">
                 <a href="dashInventario.php" class="btn btn-primary">Regresar</a>
                 </div>

                     <div class='card'>
                        
                         <div class='card-header'>
                        
                            <h1>Agregar Producto</h1>
                         </div>
                         
                         <div class='card-body'>
                         
                         <div class="row">
                        
                    
                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblCedula" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblNombre" class="control-label">Precio</label>
                        <input type="text" class="form-control" id="txtPrecio" name="txtPrecio">
                        
                    </div>

                    <div class="col-md-4 margin-bottom-15">
                    
                    <label for="lblNombre" class="control-label">Cantidad</label>
                        <input type="number" class="form-control" id="txtPrecio" name="txtPrecio"
                        autocomplete="Off" required min="1">
                            </div>
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>

                <br/>

                <div class="row">
                <div class="col-md-3 margin-bottom-15">
                        <label for="lblContrasenna" class="control-label">Proveedor</label>
                        <select style=" width:200px" class="form-control" id="cboProducto" name="cboProducto" autocomplete="Off"></select>
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblContrasenna" class="control-label">Categoria</label>
                        <select style=" width:200px" class="form-control" id="cboProducto" name="cboProducto" autocomplete="Off"></select>
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblConfirmarContrasenna" class="control-label">Imagen</label>
                        <input type="File" class="form-control" id="txtImagen" name="txtImagen">
                    </div>
                    <div class="col-md-1 margin-bottom-15">
                        <br>
                        
                    <button type="button" class="btn btn-success" style="width: 24vh; height: 65%;">Agregar</button>
                    </div>
                </div>