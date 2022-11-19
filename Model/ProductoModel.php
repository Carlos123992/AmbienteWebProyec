<?php
include_once __DIR__ . '\database.php';

function ListarProductos(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarProductos();";
    $datosProducto = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosProducto;
}
?>