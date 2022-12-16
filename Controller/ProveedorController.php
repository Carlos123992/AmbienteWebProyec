<?php
include_once "../../Model/ProveedorModel.php";

function CargarProveedores(){
    $datosProveedor = ListarProveedores();
    if($datosProveedor -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosProveedor))
        {
            echo "<tr>";
            echo "<td>" . $resultado["id_proveedor"] . "</td>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["direccion"] . "</td>";
            echo '<td><a href="EditarProveedor.php?q=' . $resultado["id_proveedor"] . '">Editar<a/></td>';
            echo "</tr>";
        }
    }
}
/*
function VerificarProveedor($id_proveedor){
    $datosProveedor = Proveedor_producto($id_proveedor);
    if($datosProveedor -> num_rows > 0){
        //no se borra
    }else{
        //se borra
    }
}
*/
function ConsultarDatosProveedor($id_proveedor)
{
    $datos = ConsultarDatosProveedorModel($id_proveedor);   
    return mysqli_fetch_array($datos);
}

if(isset($_POST["btnActualizar"]))
{
    $Nombre = $_POST["txtNombre"];
    $Direccion = $_POST["txtDireccion"];
    $Id = $_POST["txtId"];

    ActualizarProveedorModel($Nombre, $Direccion, $Id);  
    header("Location: dashProveedores.php");  
}

if(isset($_POST["btnAgregar"]))
{
    $Nombre = $_POST["txtNombre"];
    $Direccion = $_POST["txtDireccion"];

    AgregarProveedorModel($Nombre, $Direccion);  
    header("Location: dashProveedores.php");  
}
?>