<?php 
include "includes.php";
/*
if ($resultado = mysqli_query($con, "INSERT INTO operador VALUES ('', '$nombre', '$usuario', '$clave')")){
    $fila = mysqli_fetch_array($resultado);

    do { 
        echo "<tr>
        <td align=center>".$fila["nombre"]."</td>";
      echo "</tr>";
    } while ($fila = mysqli_fetch_array($resultado));
}else{
    echo "<h4> Sin datos </h4>";
}
*/
if (isset($_POST["nombre"])) {
    // El campo "nombre" ha sido enviado
    $nombre = $_POST["nombre"];
    // Hacer algo con la variable $nombre, por ejemplo, guardarla en la base de datos
  } else {
    // El campo "nombre" no ha sido enviado
    echo "Por favor, introduzca su nombre";
  }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-67w6UAVl6UOJocZvMW1Zp4z4ayQEi9Y0xjKcRMeazwBbVtn1pUU5j5k5Ik5ZQD5M0AXif9lLvq3xcDaWl2KtVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>
</head>
<body>
<h1 align="center">About Us</h1>

<br>
<br>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img_carusel_1.png" class="d-block w-100 d-md-none img-fluid" alt="...">
      <img src="img/img_carusel_1.png" class="d-none d-md-block mx-auto w-100 h-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img_carrusel_2.jpg" class="d-block w-100 h-auto d-md-none img-fluid" alt="...">
      <img src="img/img_carrusel_2.jpg" class="d-none d-md-block mx-auto h-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img_carrusel_3.jpg" class="d-block w-100 d-md-none img-fluid" alt="...">
      <img src="img/img_carrusel_3.jpg" class="d-none d-md-block mx-auto h-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img_carrusel_4.jpg" class="d-block w-100 d-md-none img-fluid" alt="...">
      <img src="img/img_carrusel_4.jpg" class="d-none d-md-block mx-auto h-100 img-fluid" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!--
<div class="card" style="width: 18rem;">
  <img src="img/perfil_BrianDuran.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text texto-recortado" id="texto-recortado">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia maiores tempore assumenda voluptatum. Vel, iure. Optio dolor rem ad numquam dignissimos praesentium et, rerum cum eveniet autem nesciunt impedit magnam?.</p>
    <a href="#" class="ver-mas" data-mas="Ver más" data-menos="Ver menos">Ver más</a>
    <a href="#" class="ver-menos" data-mas="Ver más" data-menos="Ver menos" style="display:none;">Ver menos</a>
    <a href="#" class="ver-todo" style="display:none;">Ver todo</a>
  </div>
</div>

<script>
    var maxLength = 20; // número máximo de palabras
    var textoCompleto = document.querySelector(".texto-recortado").innerHTML;

    var palabras = textoCompleto.split(" ");
    console.log(palabras);
    if (palabras.length > maxLength) {
      var textoRecortado = palabras.splice(0, maxLength).join(" ");
      console.log(textoRecortado)
      var textoFinal = textoRecortado + " ... ";
      document.querySelector(".texto-recortado").innerHTML = textoFinal;
      document.querySelector(".ver-mas").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".texto-recortado").innerHTML = textoCompleto;
        document.querySelector(".ver-mas").style.display = "none";
        document.querySelector(".ver-menos").style.display = "inline";
      });
      document.querySelector(".ver-menos").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".texto-recortado").innerHTML = textoFinal;
        document.querySelector(".ver-mas").style.display = "inline";
        document.querySelector(".ver-menos").style.display = "none";
      });
    }
  </script>
  -->

  <div class="container">
  <div class="row align-items-stretch">
    <div class="col-md-4">
      <div class="card d-flex">
        <div class="card-body flex-fill">
        Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellatLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam. laboriosam.
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card d-flex">
        <div class="card-body flex-fill">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellatLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam. laboriosam.
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card d-flex">
        <div class="card-body flex-fill">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque molestiae minima reiciendis nam officiis a sequi est, dolore totam, ut quibusdam cumque quis distinctio eligendi cum tempora repellat laboriosam.
        </div>
      </div>
    </div>
  </div>
</div>




  <script>
    var maxLength = 20; // número máximo de palabras
    var textoCompleto = document.querySelector(".texto-recortado").innerHTML;

    var palabras = textoCompleto.split(" ");
    if (palabras.length > maxLength) {
      var textoRecortado = palabras.splice(0, maxLength).join(" ");
      var textoFinal = textoRecortado + " ... <a href='#' class='ver-mas' data-mas='Ver más' data-menos='Ver menos'>Ver más</a>";
      document.querySelector(".texto-recortado").innerHTML = textoFinal;
      document.querySelector(".ver-mas").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".texto-recortado").innerHTML = textoCompleto;
        document.querySelector(".ver-mas").style.display = "none";
        document.querySelector(".ver-menos").style.display = "inline";
        document.querySelector(".ver-todo").style.display = "inline";
      });
      document.querySelector(".ver-menos").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".texto-recortado").innerHTML = textoFinal;
        document.querySelector(".ver-mas").style.display = "inline";
        document.querySelector(".ver-menos").style.display = "none";
        document.querySelector(".ver-todo").style.display = "none";
      });
      document.querySelector(".ver-todo").addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(".texto-recortado").innerHTML = textoCompleto;
        document.querySelector(".ver-mas").style.display = "none";
        document.querySelector(".ver-menos").style.display = "inline";
        document.querySelector(".ver-todo").style.display = "none";
      });
    }
  </script>
</body>

</html>