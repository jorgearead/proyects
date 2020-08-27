<?php
    require_once('../php/bd/usuario.php');
    $boton=$_POST['boton'];
    if($boton=='cerrar'){
        session_start();
        session_destroy();
    }
    else{
        $user = $_POST['usuario'];
        $pass = $_POST['password'];
        $i= new usuario();
        $array= $i->identificar($user,$pass);
        if($array[0]==0){
            echo '0';
        }
        else{
            session_start();
            $_SESSION['ingreso']='YES';
            $_SESSION['nombre']=$array[1];
        }
    }
?>