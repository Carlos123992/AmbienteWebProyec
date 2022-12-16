<?php
include_once __DIR__ . '\database.php';

function ListarCategorias(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarCategorias();";
    $datosCategoria = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosCategoria;
}

function AgregarCategoriaModel($Nombre,$Descripcion)
{
    $enlace = OpenDB();

    $procedimiento = "call guardar_Categoria(0, 0,'$Nombre','$Descripcion');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ConsultarDatosCategoriaModel($id_Categoria){
    $enlace = OpenDB();
    
    $procedimiento = "call ConsultarCategoriaId($id_Categoria);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ActualizarCategoriaModel($Nombre,$Descripcion,$Id)
{
    $enlace = OpenDB();

    $procedimiento = "call guardar_Categoria(1, $Id,'$Nombre','$Descripcion');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

?>