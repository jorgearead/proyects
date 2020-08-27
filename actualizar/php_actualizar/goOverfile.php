<?php
include_once 'readingXML2.php';
$folder = 'archivos_xml/';
$con=0;
$dh = opendir($folder);
while(false !== ($nombre_archivo = readdir($dh))){
  if($nombre_archivo != "." && $nombre_archivo != ".."){
      $archivos[]= $nombre_archivo;
    }
}
$total_archivos = count($archivos);
for($i=0;$i<$total_archivos;$i++){
    print "<br/>".$archivos[$i]."<br/>";
    datos_db($archivos[$i]);
    $con++;
} 
echo "<br>".$con;
?>