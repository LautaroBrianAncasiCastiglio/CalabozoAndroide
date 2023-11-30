<?php
if(!empty($_POST["Eliminar"])){
    if(!empty($_POST["Usuario"])){
        $usuario = $_POST["Usuario"];

        $sql1 ="DELETE from usuario where usuario.nombre_usuario ='$usuario' ";
        $Consulta1=mysqli_query($conexion,$sql1);

    if($Consulta1 == 1){
        
        header("Location:../../index.html");
    }
    else{
        echo "Usuario no encontrado";
    }
    }
    else{
        echo"Debe ingresar usuario y/o contraseña para continuar";
    }
}

if(!empty($_POST["Modificar"])){
    if(!empty($_POST["Usuario"] and !empty($_POST["Contrasena"] and !empty($_POST["Tipo"])))){
        $usuario = $_POST["Usuario"];
        $contrasena = $_POST["Contrasena"];
        $tipo = $_POST["Tipo"];
        $sql2 = "UPDATE usuario SET nombre_usuario ='$user' , contraseña ='$clave' , tipo_usuario = '$tipo'";
        $Consulta2=mysqli_query($conexion,$sql2);
    if($Consulta2 ==1 ){
        $_SESSION= [$usuario]["connected"][$tipo];
        header("Location:../../index.html");
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