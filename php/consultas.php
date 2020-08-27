<?php
session_start();
    if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES')
    {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divdiv, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consultas.css">
    <title>Consultas BCI</title>
</head>
<body>
    <header class="encabezado">
        <div class="espacio"></div>
        <div class="baner">
            <a href="../vistas/principal.php">
                <img src="../img/barcode-innovation.png" alt="BCI" width="256px" height="74px">
            </a>
        </div>
        <div class="salir">
            <ul class="menu">
                <li class="link" style="color:#fff; font-family: 'Times New Roman', Times, serif; font-size: 20px;"><?php echo $_SESSION['nombre'];?></li>
                <li class="link"><a href="" onclick='cerrar();'>Cerrar sesion</a></li>
            </ul>
        </div>
    </header>

    <nav id="consulta_datos">
      <form action="consultas.php" id="query" class="entradas" method="post">
        <nav>
          <input type="numbre" id="folio"        name="folio"   placeholder="No. Folio">
          <input type="text"   id="rfc"          name="rfc"     placeholder="RFC">
          <input type="text"   id="serie"        name="serie"   placeholder="No. Serie">
          <input type="text"   id="rs"           name="rs"      placeholder="Razon social">
          <input type="text"   id="descripcion"  name="descripcion"      placeholder="Descripcion">
          <input type="number" id="numeroSat"    name="numeroSat"      placeholder="Numero SAT">
        </nav>
        <nav class="fecha"> 
            <p>Fecha inicial: </p>
          <input type="date"   id="fecha"   name="fecha">
              <p>Fecha final: </p>
          <input type="date"   id="fecha_f" name="fecha_f">
        </nav>
        <nav class="botons">
          <input type="submit" value="Realizar consulta" class="button"  name="cons" required>
        </nav>
      </form>
    </nav>
    <div class="tabla">
    <table class="table">
                <thead>
                    <tr>
                    <th>Serie</th>
                    <th>Folio</th>
                    <th>RFC</th>
                    <th>Razon social</th>
                    <th style="width:40%">Descripcion</td>
                    <th style="width: 8%">Fecha</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Moneda</th>
                    <th>Tipo de cambio</th>
                    </tr>
                </thead>
    <?php
        if(isset($_POST['cons'])){
            $conexion = mysqli_connect("localhost","root","","xml_data_base");
            $folio   = $_POST['folio'];
            $rfc     = $_POST['rfc'];
            $serie   = $_POST['serie'];
            $fecha   = $_POST['fecha'];
            $fecha_f = $_POST['fecha_f'];
            $rs      = $_POST['rs'];
            $descripcion  = $_POST['descripcion'];
            $nSAT    = $_POST['numeroSat'];
            $consulta='Select * from dato_factura where ';
            $con=0;
            if(($fecha!=0) && ($fecha_f!=0)){//fecha
                $fec=" fecha BETWEEN '$fecha' and '$fecha_f'";
                $con++;
                $consulta=$consulta.$fec;
            }
            else{$fec='';}
        
            if($folio!=0){//folios que es el numero de la factura
                $fo=" folio = $folio";
                if($con>0){
                    $con++;
                    $consulta="$consulta and $fo";
                }
                else{
                    $con++;
                    $consulta=$consulta.$fo;
                }
            }
            else{$fo='';}
        
            if($rfc!=''){//rfc de la empresa
                $rf=" rfc = '$rfc'";
                if($con>0){
                    $con++;
                    $consulta=$consulta.' and '.$rf;
                }
                else{
                    $con++;
                    $consulta=$consulta.$rf;
                }
            }
            else{$rf='';}
        
            if($serie!=''){//Nomeclaruta de la serie FA, OC , ect
                $ser=" serie = '$serie'";
                if($con>0){
                    $con++;
                    $consulta=$consulta.' and '.$ser;
                }
                else{
                    $con++;
                    $consulta=$consulta.$ser;
                }
            }
            else{$ser='';}
        
            if($rs!=''){//nombre de la empresa
                $r="nombre = '$rs'";
                if($con>0){
                    $con++;
                    $consulta=$consulta.' and '.$r;
                }
                else{
                    $con++;
                    $consulta=$consulta.$r;
                }
            }
            else{$r='';}

            if($descripcion!=''){//nombre de la empresa
                $descri="descripcion Like '%$descripcion%'";
                if($con>0){
                    $con++;
                    $consulta=$consulta.' and '.$descri;
                }
                else{
                    $con++;
                    $consulta=$consulta.$descri;
                }
            }
            else{$r='';}
        
            if($con<1){
                $consulta=$consulta." 1 ";
            }
        
            $query = "$consulta ORDER BY folio DESC";
            $res = mysqli_query($conexion,$query);
            if($res->num_rows < 1){
                printf("no hay coincidencias");
            }
            else{
                while($mostrar=mysqli_fetch_array($res)){
        ?>
            
                <tr>
                    <td><?php echo $mostrar ['serie']?></td>
                    <td><?php echo $mostrar ['folio']?></td>
                    <td><?php echo $mostrar ['rfc']?></td>
                    <td><?php echo $mostrar ['nombre']?></td>
                    <td><?php echo $mostrar ['descripcion']?></td>
                    <td><?php echo $mostrar ['fecha']?></td>
                    <td><?php echo $mostrar ['sub_total']?></td>
                    <td><?php echo $mostrar ['total']?></td>
                    <td><?php echo $mostrar ['moneda']?></td>
                    <td><?php echo $mostrar ['tipo_cambio']?></td>
                </tr>
           
            <?php
                }
            }
        }
        ?>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../Resources/js/jquery-1.11.2.js"></script>

    

    <script>
        function cerrar(){
            $.ajax({
                url:'../controllers/usuario.php',
                type:'POST',
                data:"boton=cerrar"
                    }).done(function(resp){
                location.href='../vistas/index.php';
            });
        }
    </script>
</body>
</html>
<?php
}
else{
    header('location:./');
}
?>