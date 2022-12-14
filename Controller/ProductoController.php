<?php
include_once "../Model/ProductoModel.php";

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
            echo "<td>" . $resultado["img"] . "</td>";
            echo '<td><a href="ProductoEditar.php?q=' . $resultado["id_producto"] . '">Editar<a/></td>';
            echo "</tr>";
        }
    }
}
?>