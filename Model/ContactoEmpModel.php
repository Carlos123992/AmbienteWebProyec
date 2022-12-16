<?php
include_once __DIR__ . '\database.php';

function ListarContactoEmp(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarContactos();";
    $datosContactoEmp = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosContactoEmp;
}
function AgregarContactoModel($Nombre, $Direccion, $Telefono, $Correo, $Productos)
{
    $enlace = OpenDB();

    $procedimiento = "call acciones_contacto(0, 0,'$Nombre', '$Direccion', '$Productos', '$Telefono', '$Correo');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}
?>