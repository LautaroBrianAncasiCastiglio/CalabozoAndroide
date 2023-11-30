<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="Vista/Estilos/style.css" defer>

</head>

<body>
  <!-- <?php 
    include("Modelo/Usuario/logged.php");
  ?> -->
  <header>
    <nav class="navLogo">
      <img src="Media/Logo.jpeg" alt="Calabozo del androide" class="logo">
    </nav>
    
    <nav class="navIcono">
      <a href="Vista/Usuario/Login.php"><img src="Media/usuario.png" alt="Mi_Cuenta "><p class="cuenta">Cuenta</p></a>
      <a href=""><img src="Media/carrito-de-compras.png" alt="Carrito"><p class="carro">Carrito</p></a>
      <a href="Vista/Categorias/Comics.php"><img src="Media/carrito-de-compras.png" alt="Categorias"><p class="categorias">Categorias</p></a>
    </nav>
    
    <nav class="navLogo">
      <a href="index.html">
      <img src="../../Media/Logo.jpeg" alt="Calabozo del androide" class="logo">
      </a>
    </nav>
    
    <nav class="navIcono">
      <a href="Vista/Usuario/EliminarModif.php"><img src="../../Media/usuario.png" alt="Mi_Cuenta "><p class="cuenta">Cuenta</p></a>
      <a href="Vista/Productos/Registro.php"><img src="../../Media/carrito-de-compras.png" alt="Carrito"><p class="carro">Productos</p></a>
      <a href="Vista/Categorias/Todos.html"><img src="../../Media/carrito-de-compras.png" alt="Categorias"><p class="categorias">Categorias</p></a>
    </nav>
  </header>
  
  <!-- links que lo seguiran a todas partes -->
  <div id="Redes">
  <a href=""><img src="Media/Instagram_Logo.png" alt="Instagram"></a>
  <a href=""><img src="Media/Logo_de_Facebook.png" alt="Facebook"></a>
  <a href=""><img src="Media/WhatsappIcono.png" alt="Whatsapp"></a>
</div>

  <!-- carrusel principal donde se muestran imagenes sobre la enpresa  -->
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="Media/index/1.png" class=" d-block" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="Media/index/2.png" class=" d-block" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="Media/index/4.png" class="d-block" alt="Third slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
  </div>

  <main>

    <!-- Carrousel sobre los mas vendidos  -->


    <!-- son las tres cartas principales donde redigiran a paginas especificas -->
    <div id="cartas">
    <div class="carta">
    <img src="Media/index/download.png" alt="">
        <h1 >Mangas</h1> <div class="fondoh"></div>
        <a href="Vista/Categorias/Mangas.php"><button class="boton">ver</button></a>
    </div>
    <div class="carta">
    <img src="Media/index/download (2).png" alt="">
        <h1 >Comics</h1> <div class="fondoh"></div>
        <a href="Vista/Categorias/Comics.php"><button class="boton">ver</button></a>
    </div>
    <div class="carta">
    <img src="Media/index/download (1).png" alt="">
        <h1 >Todo</h1> <div class="fondoh"></div>
        <a href="Vista/Categorias/Todos.html"><button class="boton">ver</button></a>
    </div>
    </div>
    
    <div id="apartadoComics">
      <div class="producto">
        <div class="titulo"> Nombre </div>
        <img src="Media/Instagram_Logo.png" alt="...">
        <div class="precio"> Precio </div>
        <div class="autor"> Autor </div>
        <div class="genero"> Genero </div>
        <div class="subgenero"> Sub genero </div>
        <div class="fecha"> 12/22/2004</div>
      </div>
    </div>
    
    
     
  </main>

  <footer>
    <!-- place footer here -->
    <div class="categorias">
      <h3>Categorias</h3>
      <p>Mangas <br> Comics</p>
    </div>
    <div class="RedesSociales">
      <h3>Redes Sociales</h3>
      <img src="Media/Instagram_Logo.png" alt="Instagram"><a href="#">Empresa</a> <br>
      <img src="Media/Logo_de_Facebook.png" alt="Facebook"><a href="#">Empresa01@gmail.com</a> <br>
      <img src="Media/WhatsappIcono.png" alt="Whatsapp"><a href="#">+51 11 1001-0010</a> <br>
    </div>
    <div class="terminosLegales">
      <p>Copyright SoftwareName - 2023. Todos los derechos reservados. Defensa de las y los consumidores.</p>
    </div>

  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>