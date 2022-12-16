<?php
include_once 'GeneralesProducto.php';
include_once '../../Controller/ProductoController.php';
/*
if (isset($_POST['submit'])) {
	$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Verifica si el archivo existe
if (file_exists($target_file)) {
    echo "El archivo ya existes.";
    $uploadOk = 0;
}
// Valida el peso del archivo
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "El archivo peso demasiado.";
    $uploadOk = 0;
}
// Permiso de solo algunos formatos
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Comprueba si $uploadOk establece en 0 por un error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// si todo está bien, intenta cargar el archivo
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        $img_path = $_FILES["fileToUpload"]["name"];

        $sql = "INSERT INTO foto (img_path)
		VALUES ('$img_path')";


    } else {
        echo "Hubo un error al cargar la imagen al sistema.";
    }
}
	
}
*/
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
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class='card-body'>

                                <div class="row">

                                    <div class="col-md-4 margin-bottom-15">
                                        <label for="lblNombre" class="control-label">Nombre</label>
                                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                                    </div>
                                    <div class="row">
                                        <div class="col-6 .col-md-4">
                                            <label for="lblNombre" class="control-label">Precio</label>
                                            <input type="text" style="width: 90%;" class="form-control" id="txtPrecio" name="txtPrecio">


                                        </div>

                                        <div class="col-md-4 margin-bottom-15">
                                            <label for="lblNombre" class="control-label">Cantidad</label>
                                            <br>
                                            <br>
                                            <input type="number" class="form-control" id="cmbCantidad" name="cmbCantidad" autocomplete="Off" required min="1">
                                        </div>

                                    </div>

                                    <div class="col-md-3 margin-bottom-15">
                                        <label for="lblContrasenna" class="control-label">Proveedor</label>
                                        <select style=" width:200px" class="form-control" id="cboProveedor" name="cboProveedor" autocomplete="Off">
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
                                <input type="submit" class="btn btn-info" value="Procesar" id="btnAgregar" name="btnAgregar" style="width:110px">
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>