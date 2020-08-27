<?php
    exec('generar_factura.py');
    header("../vistas/principal.php");
?>