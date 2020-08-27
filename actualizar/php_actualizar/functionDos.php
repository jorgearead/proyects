<?php
  function execute($conex,$query){
      $result = mysqli_query($conex,$query);
      if(!$result){
          echo 'Error al registrar los datos';
      }
      else{
          echo 'Datos almacenados correctamente';
      }
  }
  
  function fcan($f){
    $fec=substr($f,0,-9);
    return $fec;
  }
?>