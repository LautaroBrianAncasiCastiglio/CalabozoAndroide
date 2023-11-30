
<!doctype html>
<html lang="en">

<head>
  <title>Registro</title>
  <?php
include ("../../Controlador/ConexionBD.php");
?>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="../Estilos/usuario.css">
    <link rel="stylesheet" href="../Estilos/componentes.css">
</head>

<body>
  <?php
  include("../../Modelo/Componentes/headerU.php");
  ?>
  <main>

    <form class="contenedor" action="" method="post">
        <img src="../../Media/usuario (11).png" alt="">
        <div class="ingresar">
            <h2 class="titulo">Usuario :</h2>
            <input type="text" name="Usuario" id="Usuario" class="input">
        </div>
        <div class="ingresar">
            <h2 class="titulo">Contraseña :</h2>
            <input type="password" name="Contrasena" id="Contraseña" class="input">
        </div>
        <div class="ingresar">
            <h2 class="titulo">Correo electronico :</h2>
            <input type="email" name="Email" id="Email" class="input">
        </div>
        <div class="ingresar">
            <h2 class="titulo">Codigo postal :</h2>
            <input type="number" name="Postal" id="Postal" class="input">
        </div>
        <input type="submit" name="Enviar" value="Enviar" id="Ingresar"  >
      <?php 
include ("../../Modelo/Usuario/registro.php");?>
      </form>

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