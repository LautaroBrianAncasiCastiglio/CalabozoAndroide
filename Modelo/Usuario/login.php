 <?php
// <!--
// session_start();
// $_SESSION= [$usuario]["connected"]["0"]; -->

if(isset($_POST["Enviar"])){
    // acciones
     if(!empty($_POST["Usuario"])and !empty($_POST["Contrasena"])){
        $usario=$_POST["Usuario"];
        $contrasena=$_POST["Contrasena"];
        echo "$usario";
    // }
    $sql = "SELECT * FROM usuario  WHERE nombre_usuario='$usuario' and contraseña='$contrasena'";
    $Consulta=mysqli_query($conexion,$sql);
    // utilizamos las variables creadas para compararlas
    if($Consulta == 1){
        // fetch_object obtie la fila actual de un conjunto de resultados como un objeto 
        echo"blas";
        header("Location: ../../index.php");
    }
    else{
        echo "no existe";
    }
    }
else{
     echo "debe ingresar un usuario y/o contraseña para continuar";
}
}
?>