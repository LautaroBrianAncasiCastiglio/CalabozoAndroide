<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <?php
  include ("../../Controlador/ConexionBD.php");

  $ruta_abs="https://localhost/delfin";
  ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

    <link rel="stylesheet" href="../Estilos/productos.css" >
    <link rel="stylesheet" href="../Estilos/componentes.css">
</head>

<body>
  <?php include ("../../Modelo/Componentes/headerU.php") ?>

  <main >
  <form class="contenedor-principal" action="" method="post" enctype="multipart/form-data">
    <div class="contenedor1">
      <div class="ingresar">
            <h2 class="titulo">Id :</h2>
            <input type="text" name="Id" id="IdP" class="input">
        </div>
        <div class="ingresar">
            <h2 class="titulo">Nombre :</h2>
            <input type="text" name="NombreP" id="NombreP" class="input">
        </div>
        <div class="ingresar">
            <h2 class="titulo">Descripción :</h2>
            <input type="text" name="DescripciónP" id="DescripciónP" class="input">
        </div>
        <div class="numeros">
        <div class="ingresar">
            <h2 class="titulo">Stock :</h2>
            <input type="number" name="StockP" id="StockP" class="input numero">
        </div>
        <div class="ingresar">
          <h2 class="titulo">Precio :</h2>
          <input type="number" name="PrecioP" id="PrecioP" class="input">
      </div>
      </div>
      <div class="ingresar">
        <h2 class="titulo">Paginas :</h2>
        <input type="number" name="Paginas" id="Paginas" class="input numero">
      </div>
      <div class="ingresar">
        <h2 class="titulo">Fecha de publicacion :</h2>
        <input type="date" name="FechaP" id="FechaP" class="input">
    </div>
    
   </div>
   <div class="contenedor2"> 
        <div class="ingresar">
          <h2 class="titulo">Imagen :</h2>
          <input type="file" name="ImageP" id="ImageP" class="imagenP form-control">
      </div>
        <div class="ingresar">
          <h2 class="titulo">Genero :</h2>
          <input type="text" name="GeneroP" id="GeneroP" class="input">
      </div>
      <div class="ingresar">
        <h2 class="titulo">Subgenero :</h2>
        <input type="text" name="SubgeneroP" id="SubgeneroP" class="input">
    </div>
    <div class="ingresar">
      <h2 class="titulo">Autor :</h2>
      <input type="text" name="AutorP" id="AutorP" class="input">
  </div>
    
  <div class="ingresar">
      <h2 class="titulo">Tipo :</h2>
      <input type="text" name="TipoP" id="TipoP" class="input" placeholder="'Manga' o 'Comic'">
  </div>
  <div class="ingresar">
      <h2 class="titulo">Color :</h2>
      <input type="text" name="ColorP" id="ColorP" class="input" placeholder="'Si' o 'No'">    
    
    <?php  include ("../../Modelo/Productos/modificar.php"); ?>
    </div>
    <input type="submit" value="Modificar" id="Ingresar" name ="Modificar">
</form>

  </main>

  <?php include ("../../Modelo/Componentes/footer.php"); ?>
    
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <!-- lo sacamos de CKEditor -->
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#text' ) )
        .catch( error => {
            console.error( error );
        } );
    </script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>