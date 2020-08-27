<?php
function datos_db($nom_archivo){
  require_once 'functionDos.php'; //funcion que hace la coneccion con la base de datos de la factura
  require_once '../../php/simple_html_dom/simple_html_dom.php'; //libreria que ayuda a la lectura de los XML
  $xml = new SimpleXMLElement("./archivos_xml/$nom_archivo",null,true); //ruta de los archivos
  $ns = $xml->getDocNamespaces(); //obtiene el nombre de los nosdos
  $nodoc = $xml->getNamespaces(true);
  $xml->registerXPathNamespace('t',$nodoc['tfd']); 

  $conexion=mysqli_connect("localhost","root","","xml_data_base");
  
$concep1=null;$concep2=null;$concep3=null;$concep4=null;$concep5=null;$concep6=null;
foreach($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
  $vari1 = $cfdiComprobante['version'];
  $var1 = $cfdiComprobante['Version'];
}

if($vari1=='3.2' && $var1==''){
    foreach($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
      $vari2 = $cfdiComprobante['serie'];
      $vari3 = $cfdiComprobante['folio'];
      $vari4 = $cfdiComprobante['fecha']; 
      $vari5 = $cfdiComprobante['formaDePago']; 
      $vari6 = $cfdiComprobante['subTotal']; 
      $vari7 = $cfdiComprobante['TipoCambio']; 
      $vari8 = $cfdiComprobante['Moneda']; 
      $vari9 = $cfdiComprobante['total'];
    }
    foreach($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor){
      $re1 = $Receptor['rfc']; 
      $re2 = $Receptor['nombre']; 
    }
    foreach($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){
          $con1[] = $Concepto['noIdentificacion'];
          $con2[] = $Concepto['cantidad'];
          $con3[] = $Concepto['unidad'];
          $con4[] = $Concepto['descripcion'];
          $con5[] = $Concepto['valorUnitario'];
          $con6[] = $Concepto['importe'];
    } 
    foreach($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $Impuestos){
      $im = $Impuestos['totalImpuestosTrasladados'];
    }
    foreach($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $Tras){
      $tr1 = $Tras['impuesto'];
      $tr2 = $Tras['importe'];
      $tr3 = $Tras['tasa'];
    }
    $fc = fcan($vari4);
    $c1=implode(" , ",$con1);
    $c2=implode(" , ",$con2);
    $c3=implode(" , ",$con3);
    $c4=implode(" , ",$con4);
    $c5=implode(" , ",$con5);
    $c6=implode(" , ",$con6);
    
    $consulta = "INSERT INTO dato_factura(folio, serie, fecha, forma_pago, sub_total, tipo_cambio, moneda, total, rfc, nombre, no_identificacion, cantidad, unidad, valor_unitario, descripcion, importe, impuesto_total, impuesto, importe2, tasa) VALUES ('$vari3','$vari2','$fc','$vari5','$vari6','$vari7','$vari8','$vari9','$re1','$re2','$c1','$c2','$c3','$c5','$c4','$c6','$im','$tr1','$tr2','$tr3')";
    execute($conexion,$consulta);//ejecuta la consulta
    mysqli_close($conexion); //Cierre de la coneccion a la bade de datos
}
elseif($vari1=='' && $var1=='3.3'){
  foreach($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
    $ser  = $cfdiComprobante['Serie'];
    $fol  = $cfdiComprobante['Folio'];
    $fe2  = $cfdiComprobante['Fecha']; 
    $FP   = $cfdiComprobante['FormaPago']; 
    $subT = $cfdiComprobante['SubTotal']; 
    $tC   = $cfdiComprobante['TipoCambio']; 
    $mone = $cfdiComprobante['Moneda']; 
    $tota = $cfdiComprobante['Total'];
  }
  foreach($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor){
  	$Rrfc = $Receptor['Rfc']; 
    $Rnom = $Receptor['Nombre']; 
  }
  foreach($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){
      $ni[]   = $Concepto['NoIdentificacion'];
      $Cd[]   = $Concepto['Cantidad'];
      $uni[]  = $Concepto['ClaveProdServ'];
      $desc[] = $Concepto['Descripcion'];
      $vuni[] = $Concepto['ValorUnitario'];
      $impo[] = $Concepto['Importe'];
  }
  foreach($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $Impuestos){
  	$im = $Impuestos['TotalImpuestosTrasladados'];
  }
  foreach($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $Tras){
  	$impu     = $Tras['Impuesto'];
    $taocu    = $Tras['TasaOCuota'];
    $importe1 = $Tras['Importe'];
  }
  $fechas=fcan($fe2);
  $ni1    =implode(" , ",$ni);
  $Cd2    =implode(" , ",$Cd);
  $uni3   =implode(" , ",$uni);
  $desc4  =implode(" , ",$desc);
  $vuni5  =implode(" , ",$vuni);
  $impo6  =implode(" , ",$impo);

  $consultas = "INSERT INTO dato_factura(folio, serie, fecha, forma_pago, sub_total, tipo_cambio, moneda, total, rfc, nombre, no_identificacion, cantidad, valor_unitario, descripcion, importe, impuesto_total, impuesto, importe2, tasa,clavePS) VALUES ('$fol','$ser','$fechas','$FP','$subT','$tC','$mone','$tota','$Rrfc','$Rnom','$ni1','$Cd2','$vuni5','$desc4','$impo6','$im','$impu','$importe1','$taocu','$uni3')";
  execute($conexion,$consultas);//ejecuta la consulta
  mysqli_close($conexion); //Cierre de la coneccion a la bade de datos

}
else{
  echo $vari1."no se encuentra";
}
}
?>