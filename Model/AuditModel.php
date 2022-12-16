<?php
include_once __DIR__ . '\database.php';

function ListarAudit(){
    $enlace = OpenDB();
    $procedimiento = "CALL listarAudit();";
    $datosAudit = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosAudit;
}
?>