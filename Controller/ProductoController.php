<?php

include "../Model/ProductoModel.php";

function CargarProductos(){
    $datosProducto = ListarProductos();
    if($datosProducto -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosProducto))
        {
            echo "<tr>";
            echo "<td>" . $resultado["id_producto"] . "</td>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["precio"] . "</td>";
            echo "<td>" . $resultado["cantidad"] . "</td>";
            echo "<td>" . $resultado["id_proveedor"] . "</td>";
            echo "<td>" . $resultado["id_categoria"] . "</td>";
            echo '<td><a href="EditarProducto.php?q=' . $resultado["id_producto"] . '">Editar<a/></td>';
            echo "</tr>";
        }
    }
}
function CargarProductosInvi(){
    $datosProducto = ListarProductos();
    if($datosProducto -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosProducto))
        {
            echo "<tr>";
            echo "<td>" . $resultado["id_producto"] . "</td>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["precio"] . "</td>";
            echo "<td>" . $resultado["cantidad"] . "</td>";

            
            echo "</tr>";
        }
    }
}


function CargarProveedores(){
    $datosProveedor = ListarProveedores();

    if($datosProveedor -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($resultado = mysqli_fetch_array($datosProveedor))
        {
            if($datosProveedor == $resultado["id_proveedor"])
                echo '<option selected value="' . $resultado["id_proveedor"] . '">' . $resultado["nombre"] . '</option>';
            else
                echo '<option value="' . $resultado["id_proveedor"] . '">' . $resultado["nombre"] . '</option>';
        }
    }
}

function CargarCategorias(){
    $datosCategoria = ListarCategorias();

    if($datosCategoria -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($resultado = mysqli_fetch_array($datosCategoria))
        {
            if($datosCategoria == $resultado["id_categoria"])
                echo '<option selected value="' . $resultado["id_categoria"] . '">' . $resultado["nombre"] . '</option>';
            else
                echo '<option value="' . $resultado["id_categoria"] . '">' . $resultado["nombre"] . '</option>';
        }
    }
}

function ConsultarDatosProducto($id_producto)
{
    $datos = ConsultarDatosProductoModel($id_producto);   
    return mysqli_fetch_array($datos);
}

if(isset($_POST["btnAgregar"]))
{
    $nombre = $_POST["txtNombre"];
    $precio = $_POST["txtPrecio"];
    $cantidad = $_POST["cmbCantidad"];
    $id_proveedor = $_POST["cboProveedor"];
    $id_categoria = $_POST["cboCategoria"];

    AgregarProducto($nombre, $precio,$cantidad, $id_proveedor,$id_categoria);  
    header("Location: dashInventario.php");  
}


?>