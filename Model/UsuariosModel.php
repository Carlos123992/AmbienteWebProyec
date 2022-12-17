<?php
include_once __DIR__ . '\database.php';

function ValidarCredenciales($correo, $password)
{
    $enlace = OpenDB();
    $procedimiento = "CALL ValidarCredenciales('$correo', '$password');";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}
function ListarUsuarios(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarUsuarios();";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}


function AgregarUsuarioModel($Nombre, $Apellido, $Correo, $Password)
{
    $enlace = OpenDB();

    $procedimiento = "call acciones_usuario(0, 0,'$Nombre','$Apellido','$Correo', '$Password', 0, 1);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ConsultarDatosUsuarioModel($id_Usuario){
    $enlace = OpenDB();
    
    $procedimiento = "call ConsultarUsuarioId($id_Usuario);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ActualizarUsuarioModel($Nombre, $Apellido, $Correo, $Password, $Id)
{
    $enlace = OpenDB();

    $procedimiento = "call acciones_usuario(1, $Id,'$Nombre','$Apellido','$Correo', '$Password', 0, 1);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}
?>