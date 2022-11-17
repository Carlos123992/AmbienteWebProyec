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
?>