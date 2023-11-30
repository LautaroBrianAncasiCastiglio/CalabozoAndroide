<?php
    if(!empty($_POST["Registrar"])){
        $Nombre =$_POST["NombreP"];
        $id =$_POST["Id"];
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
        
        //Consulta sql
        $query1="INSERT INTO productos(idproducto, nombre_pro, descripcion_pro, stock_pro, autor_pro, precio_pro, fecha, imagen)
        VALUE('$id','$Nombre','$Descripcion','$Stock','$Autor','$Precio','$Fecha','$Imagen')";

        $query2="INSERT INTO carac_producto(productos, genero, subgenero, tipo, color, paginas)
        VALUE('$id','$Genero','$Subgenero','$Tipo','$Color','$Paginas')"; 
        

        // compilamos / ejecutamos la consulta
        
        $Consulta1=mysqli_query($conexion,$query1);
        
        $Consulta2=mysqli_query($conexion,$query2);

        if($Consulta2 == 1){
            if( $Consulta1 == 1){
                
            header('Location: modificacion.php');
            } 
            else{ 
                echo "incorrecto";
            }

            // Swal.fire({
            //   icon: 'success',
            //   title: 'Felicidades',
            //   text: 'Operación válida, el producto ha sido creado.',  
            //   })
            // </script>
            
            
        }
        else{
            // incorrecto
            echo "incorecto";
            // <script>
            // Swal.fire({
            //   icon: 'error',
            //   title: 'Oops...!',
            //   text: 'Operación inválida, el producto ya ha sido creado.',  
            //   })
            // </script> 
        }
    }
    else{
    }


?>

<!-- ean una pagina llamada " ver " usamos un while en una carta para traer en cada una de los elementos -->