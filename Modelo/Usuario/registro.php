<?php
    if(!empty($_POST["Enviar"])){
        // if(empty($_POST["Usuario"] or empty($_POST["Contraseña"])or empty($_POST["Email"])or empty($_POST["Postal"]))){
        //     echo " complete ";
        // }
        // else{
            $usu = $_POST["Usuario"];
            $con = $_POST["Contrasena"];
            $ema = $_POST["Email"];
            $pos = $_POST["Postal"];
            $query="INSERT INTO usuario (nombre_usuario, email_usuario, contraseña, codigo_po) VALUES ('$usu','$ema', '$con', '$pos')";
            $consulta = mysqli_query($conexion,$query);
            if($consulta){
                echo"Se ha registrado";
                header('Location: Login.php');
                
            }
            else{
                echo"No se ha registrado";
            // }
            
        }
        
    }
    else{}

?>