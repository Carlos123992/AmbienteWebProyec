<?php
include_once __DIR__ . '\database.php';

function ListarProductos(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarProductos();";
    $datosProducto = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosProducto;
}

function ListarProveedores(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarProveedores();";
    $datosProveedor = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosProveedor;
}

function ListarCategorias(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarCategorias();";
    $datosCategoria = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosCategoria;
}

          

function AgregarProducto($nombre,$precio, $cantidad, $id_proveedor, $id_categoria)
{
    $enlace = OpenDB();

    $procedimiento = "call guardar_producto(0,0,'$nombre','$precio','$cantidad',$id_proveedor, $id_categoria);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ConsultarDatosProductoModel($id_producto){
    $enlace = OpenDB();
    
    $procedimiento = "call ConsultarProductoId($id_producto);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


/* unction agregarPrueba()
{
    INSERT into luchador(nombre_Luchador,foto,apodo) values(?,?,?)");

}*/
?>