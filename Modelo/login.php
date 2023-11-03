<?php
if(!empty($_POST["ingresar "])){
    // acciones
    if(!empty($_POST["usuario"])and !empty($_POST["contraseña"])){
        $usario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        echo $usario;
    }
    $sql=$conexion->query("select * from login  where Usuario='$usuario' and Contraseña='$contraseña'");
    // utilizamos las variables creadas para compararlas
    if($dato= $sql->fetch_object()){
        // fetch_object obtie la fila actual de un conjunto de resultados como un objeto 
        header("Location:inicio.php");
    }
    else{
        echo "no existe";
    }
}
else{
    echo "debe ingresar un usuario y/o contraseña para continuar";
}


?>