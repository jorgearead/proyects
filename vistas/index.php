<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>BCI</title>
</head>
<body>
    <div class="container">
        <form class="contenedor_formulario">
            <div class="formulario">
                <div class="sesion">Iniciar Sesión</div>
                    <div class="alert alert-danger text-center" style="display:none;" id="error">
                        <p>Usuario o contraseña incorrecta.</p>
                    </div>
                <div>
                    <p>Usuario</p>
                    <div class="input">
                        <center><input type="text" class="from-control" id="usuario" placeholder="Ingrese su Usuario"></center>
                    </div>
                </div>
                <div>
                    <p>Contraseña</p>
                    <div class="input">
                        <center><input type="password" class="from-control" id="password" placeholder="Ingrese su Contraseña"></center>
                    </div>
                </div>
                <div>
                    <button type="button" class="button" onclick='confirmar();'> Entrar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script>
        function confirmar(){
            var User = $('#usuario').val();
            var Password = $('#password').val();
            $.ajax({
                url:'../controllers/usuario.php',
                type:'POST',
                data:'usuario='+User+'&password='+Password+"&boton=ingresar"
            }).done(function(resp){
                if(resp=='0'){
                    $('#error').show();
                }
                else{
                    location.href='principal.php';
                }
            });
        }
    </script>
</body>
</html>