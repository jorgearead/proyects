<?php
    $conexion=mysqli_connect("localhost","root","","xml_data_base");
    $consulta="SELECT folio FROM dato_factura WHERE folio=(SELECT max(folio) FROM dato_factura)";
    $resultado=mysqli_query($conexion,$consulta);
    foreach($resultado as $res){
        $re=$res['folio'];
    }
    $re=$re+1;
    $file = fopen("dato.txt", "w");
    fwrite($file, "$re" . PHP_EOL);
    exec('descarga_datos.py');
    header("../vistas/principal.php");
?>