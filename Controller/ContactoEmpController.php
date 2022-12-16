<?php


function CargarContactosEmp(){
    include_once "../../Model/ContactoEmpModel.php";
    $datosContactoEmp = ListarContactoEmp();
    if($datosContactoEmp -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosContactoEmp))
        {
            echo "<tr>";
            echo "<td>" . $resultado["ID_CONTACTO"] . "</td>";
            echo "<td>" . $resultado["NOMBRE_EMPRESA"] . "</td>";
            echo "<td>" . $resultado["DIRECCION"] . "</td>";
            echo "<td>" . $resultado["PRODUCTOS"] . "</td>";
            echo "<td>" . $resultado["TELEFONO"] . "</td>";
            echo "<td>" . $resultado["CORREO"] . "</td>";
            //eliminar falta
            echo "</tr>";
        }
    }
}

if(isset($_POST["btnAgregar"]))
{
    include_once "../Model/ContactoEmpModel.php";
    $Nombre = $_POST["txtNombre"];
    $Direccion = $_POST["txtDireccion"];
    $Telefono = $_POST["txtTelefono"];
    $Correo = $_POST["txtCorreo"];
    $Productos = $_POST["txtProductos"];

    AgregarContactoModel($Nombre, $Direccion, $Telefono, $Correo, $Productos);  
    header("Location: inicio.php");  
}
?>