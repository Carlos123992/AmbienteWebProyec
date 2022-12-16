<?php
include_once __DIR__ . '\database.php';

function ListarProveedores(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarProveedores();";
    $datosProveedor = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosProveedor;
}

function AgregarProveedorModel($Nombre,$Direccion)
{
    $enlace = OpenDB();

    $procedimiento = "call guardar_proveedor(0, 0,'$Nombre','$Direccion');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ConsultarDatosProveedorModel($id_proveedor){
    $enlace = OpenDB();
    
    $procedimiento = "call ConsultarProveedorId($id_proveedor);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ActualizarProveedorModel($Nombre,$Direccion,$Id)
{
    $enlace = OpenDB();

    $procedimiento = "call guardar_proveedor(1, $Id,'$Nombre','$Direccion');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

?>