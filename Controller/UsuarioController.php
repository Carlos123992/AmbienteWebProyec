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
<<<<<<< HEAD
        header("Location: View\dashboard.php");
=======
        header("Location: View\inicio.php");
>>>>>>> f581c9d5214b9648eb808938a5b58349c5ece5e0
    }
    else
    {
        header("Location: inicio.php");
    }
}
<<<<<<< HEAD

function CargarUsuarios(){
    $datosUsuarios = ListarUsuarios();
    if($datosUsuarios -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosUsuarios))
        {
            echo "<tr>";
            echo "<td>" . $resultado["id_usuario"] . "</td>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["apellido"] . "</td>";
            echo "<td>" . $resultado["correo"] . "</td>";
            echo "<td>" . $resultado["password"] . "</td>";
            echo "<td>" . $resultado["credito"] . "</td>";
            echo "<td>" . $resultado["id_rol"] . "</td>";
            echo '<td><a href="UsuariosEditar.php?q=' . $resultado["id_usuario"] . '">Editar<a/></td>';
            echo "</tr>";
        }
    }
}
=======
>>>>>>> f581c9d5214b9648eb808938a5b58349c5ece5e0
?>