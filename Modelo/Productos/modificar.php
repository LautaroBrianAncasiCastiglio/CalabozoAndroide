<?php


if(!empty($_POST["Modificar"])){
    $id =$_POST["Id"];
    $Nombre =$_POST["NombreP"];
    $Descripcion =$_POST["DescripciónP"];
    $Stock =$_POST["StockP"];
    $Precio =$_POST["PrecioP"];
    $Paginas =$_POST["Paginas"];
    $Fecha =$_POST["FechaP"];
    $Genero =$_POST["GeneroP"];
    $Subgenero =$_POST["SubgeneroP"];
    $Autor =$_POST["AutorP"];
    $Tipo =$_POST["TipoP"];
    $Color =$_POST["ColorP"];
    // ubicacion de la imagen
    $Imagen =$_FILES["ImageP"]["name"];
    $ruta_img=$_FILES["ImageP"]["tmp_name"];
    $Ubicacion="../../Media/Productos/".$Imagen;
    
    // copiamos la ruta de la imagen, esto es relativo segun donde lo carguemos
    if($Ubicacion == "../../Media/Productos/"){
        $Ubicacion = "";
    }else{
    copy($ruta_img,$Ubicacion);
    }
    
    while ($Cod == 0) {    
   
        //Consulta sql
        $query1="SELECT idproducto, nombre_pro, descripcion_pro, stock_pro, autor_pro, precio_pro, fecha, imagen  FROM productos ";
        $query2="SELECT productos, genero, subgenero, tipo, color, paginas  FROM carac_producto ";
       
        // compilamos / ejecutamos la consulta
        $Consulta1=mysqli_query($Ruta,$query1);
        $Consulta2=mysqli_query($Ruta,$query2);
        while($consu1 = mysqli_fetch_array($Consulta1)){
            if($consu1['idproducto'] == $id){
                if($consu['nombre_pro'] == ""){$Nombre =$consu["nombre_pro"];}
                if($consu['descripcion_pro'] == ""){$Descripcion =$consu["descripcion_pro"];}
                if($consu['stock_pro'] == ""){$Stock =$consu["stock_pro"];}
                if($consu['autor_pro'] == ""){$Autor =$consu["autor_pro"];}
                if($consu['precio_pro'] == ""){$Precio =$consu["precio_pro"];}
                if($consu['fecha'] == ""){$Fecha =$consu["fecha"];}
                if($consu['imagen'] == ""){$Imagen =$consu["imagen"];}
        }
        else{
            echo"no existe";
        }
    }
    while($consu1 = mysqli_fetch_array($Consulta1)){
        if($consu1['productos'] == $id){
            if($consu['genero'] == ""){$Genero =$consu["genero"];}
            if($consu['subgenero'] == ""){$Subgenero =$consu["subgenero"];}
            if($consu['tipo'] == ""){$Tipo =$consu["tipo"];}
            if($consu['color'] == ""){$Color =$consu["color"];}
            if($consu['paginas'] == ""){$Paginas =$consu["paginas"];}
    }
    else{
        echo"no existe";
    }
}
    }
    
        $query1="UPDATE productos SET  nombre_pro = '$Nombre', descripcion_pro = '$Descripcion' , stock_pro ='$Stock', autor_pro ='$Autor', precio_pro ='$Precio', fecha ='$Fecha', imagen = '$Imagen' WHERE productos.idproducto = '$id'";
        
        $query2="UPDATE carac_producto SET genero ='$Genero', subgenero='$Subgenero', tipo='$Tipo', color=$Color', paginas='$Paginas' WHERE carac_producto.productos='$id'";

        // compilamos / ejecutamos la consulta        
        $Consulta1=mysqli_query($conexion,$query1);
        $Consulta2=mysqli_query($conexion,$query2);

        if($Consulta2 == 1){
            if( $Consulta1 == 1){
                
            header('Location: ../../index.php');
            } 
            else{ 
                echo "incorrecto";
            }
    }
    else{
        echo"Debe ingresar usuario y/o contraseña para continuar";
    }
}
?>