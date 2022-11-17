<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\UsuariosModel.php';

if(isset($_POST["btnIngresar"]))
{
    $correo = $_POST["txtCorreo"];
    $password = $_POST["txtPass"];

    $datosUsuario = ValidarCredenciales($correo, $password);

    if($datosUsuario -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosUsuario);

        $_SESSION["sesionNombre"] = $resultado["nombre"];
        header("Location: View\inicio.php");
    }
    else
    {
        header("Location: inicio.php");
    }
}
?>