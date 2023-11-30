<?php

if(!empty($_POST["modificar"])){
    if(!empty($_POST["usuario"] and !empty($_POST["contraseña"]))){
        $user = $_POST["usuario"];
        $clave = $_POST["contraseña"];
        $sql = $ruta->query("select * from login where usuario ='$user' and contraseña ='$clave'");
    if($verificamos=$sql->fetch_object()){
        header("Location:Vistas/Paginas/modificar.php");
    }
    else{
        echo "Usuario no encontrado";
    }
    }
    else{
        echo"Debe ingresar usuario y/o contraseña para continuar";
    }
}

?>