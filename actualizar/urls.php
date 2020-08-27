<?php
$fp1 = fopen("dato.txt", "r");
while (!feof($fp1)){
    $linea = fgets($fp1);
    echo $linea;
}
fclose($fp1);
$fp2 = fopen("dato_final.txt", "r");
while (!feof($fp2)){
    $linea2 = fgets($fp2);
    echo $linea2;
}
fclose($fp2);

?>