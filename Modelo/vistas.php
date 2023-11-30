<?php
$Cod = 0 ;
//el tipo puede ser manga comics, ambos etc
while ($Cod == 0) {    
   
//Consulta sql
/*$query="SELECT productos.nombre_pro ,productos.descripcion_pro ,productos.stock_pro , productos.autor_pro 
,productos.precio_pro ,productos.fecha ,productos.imagen ,
 carac_producto.genero ,carac_producto.subgenero ,carac_producto.tipo ,carac_producto.paginas
 FROM productos, carac_producto ";*/
 

// compilamos / ejecutamos la consulta
$Consulta=mysqli_query($conexion,$query);
    // if($consu['tipo'] == $tipo){
    //     echo "es una manga";
    // }
while($consu = mysqli_fetch_array($Consulta)){
echo"<div class=producto>
        <div class=titulo> ". $consu["productos.nombre_pro"]." </div>
        <img src=". $consu["productos.imagen"]." alt=...>
        <div class=precio> ". $consu["productos.precio_pro"]." </div>
        <div class=autor> ". $consu["productos.autor_pro "]." </div>
        <div class=genero> ". $consu["carac_producto.genero "] ." </div>
        <div class=subgenero> ". $consu["carac_producto.subgenero"]." </div>
        <div class=fecha> ". $consu["productos.fecha"]."</div>
      </div>";
}

mysqli_close($conexion);

if($Consulta){
// // correcto
// while($consu = mysqli_fetch_array($Consulta)){
//     echo"datos registrados ,
//     <div class=card>
//     <img class=card-img-top src=". $consu['imagen'] ." alt=imagen>
//     <div class=card-body>
//         <h4 class=.card-title>". $consu['codigo'] ."</h4>
//         <p class=.card-text>". $consu['nombre'] ."</p>
//         <p class=.card-text>". $consu['descripcion'] ."</p>
//         <p class=.card-text>". $consu['precio'] ."</p>
//     </div>
//     </div>";
//     }
    
}
else{
// // incorrecto
//     echo"datos no registrados"; 
//             echo "<script>
//             Swal.fire({
//               icon: 'error',
//               title: 'Oops...!',
//               text: 'Operación inválida, el puesto ya ha sido vendido.',  
//               })
//             </script>"; 
}
}


?>

