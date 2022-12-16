<?php
include_once "../../Model/CategoriaModel.php";

function CargarCategorias(){
    $datosCategoria = ListarCategorias();
    if($datosCategoria -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosCategoria))
        {
            echo "<tr>";
            echo "<td>" . $resultado["id_categoria"] . "</td>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["descripcion"] . "</td>";
            echo '<td><a href="EditarCategoria.php?q=' . $resultado["id_categoria"] . '">Editar<a/></td>';
            echo "</tr>";
        }
    }
}

function VerificarCategoria($id_Categoria){
    $datosCategoria = Categoria_producto($id_Categoria);
    if($datosCategoria -> num_rows > 0){
        //no se borra
    }else{
        //se borra
    }
}

function ConsultarDatosCategoria($id_Categoria)
{
    $datos = ConsultarDatosCategoriaModel($id_Categoria);   
    return mysqli_fetch_array($datos);
}

if(isset($_POST["btnActualizar"]))
{
    $Nombre = $_POST["txtNombre"];
    $Descripcion = $_POST["txtDescripcion"];
    $Id = $_POST["txtId"];

    ActualizarCategoriaModel($Nombre, $Descripcion, $Id);  
    header("Location: dashCategoria.php");  
}

if(isset($_POST["btnAgregar"]))
{
    $Nombre = $_POST["txtNombre"];
    $Descripcion = $_POST["txtDescripcion"];

    AgregarCategoriaModel($Nombre, $Descripcion);  
    header("Location: dashCategoria.php");  
}
?>