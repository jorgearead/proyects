<?php
session_start();
    if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES')
    {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divdiv, initial-scale=1.0">
    <link rel="stylesheet" href="../css/principal.css">
    <title>Portal de facturacion BCI</title>
</head>
<body>
    <header class="encabezado">
        <div class="espacio">
        </div>
        <div class="baner">
            <a href="principal.php">
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
<div class="body">
    <div class="container">
        <div class="card">
            <div class="fase fase1">
                <div class="content">
                    <img src="../img/database.png" alt="" >
                    <h3>Consultar Datos</h3>
                </div>
            </div>
            <div class="fase fase2">
                <div class="content">
                    <p>De clic en el botón para realizar consultas, llene los campos de los datos que quiere consultar y revise los datos arrojados.</p>
                    <a href="../php/consultas.php">Consulte ahora</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="fase fase1">
                <div class="content">
                    <img src="../img/document.png" alt="">
                    <h3>Crear Factura</h3>
                </div>
            </div>
            <div class="fase fase2">
                <div class="content">
                    <p>De clic en el botón para poder generar una factura nueva en el sistema, llene los datos requeridos por la pagina y al terminar de llenar los campos oprima enviar.</p>
                    <a href="../python_generarFactura/llamarArchivo.php">Cree nueva factura</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="../Resources/js/jquery-1.11.2.js"></script>
        <script>
            function cerrar(){
                $.ajax({
                    url:'../controllers/usuario.php',
                    type:'POST',
                    data:"boton=cerrar"
                }).done(function(resp){
                    location.href='./index.php';
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