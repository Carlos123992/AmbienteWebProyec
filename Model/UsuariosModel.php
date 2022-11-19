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
<<<<<<< HEAD

function ListarUsuarios(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarUsuarios();";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}
=======
>>>>>>> f581c9d5214b9648eb808938a5b58349c5ece5e0
?>