<?php
include_once "../../Model/AuditModel.php";

function CargarAudit(){
    $datosAudit = ListarAudit();
    if($datosAudit -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosAudit))
        {
            echo "<tr>";
            echo "<td>" . $resultado["ID_AUDIT"] . "</td>";
            echo "<td>" . $resultado["FECHA"] . "</td>";
            echo "<td>" . $resultado["ACCION"] . "</td>";
            echo "<td>" . $resultado["TABLA"] . "</td>";
            echo "</tr>";
        }
    }
}
?>