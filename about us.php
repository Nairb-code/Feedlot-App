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

<div class="container">

<!-- START DIV CARRUSEL -->

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
<!-- END DIV CARRUSEL --><br><br>






<!-- SECCION DE EJEMPLO-->
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
<!--END SECCION DE EJEMPLO-->






</div> <!-- END CONTAINER  -->

<div class="container mt-5 ">
  <div class="row text-center">
  <div class="col-sm-3">
    <div class="card">
    <img src="img/perfil_BrunoCaruso.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bruno Caruso</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Software Developer</h6>
        <p class="card-text texto-recortado">Passionate Full Stack Developer & technology enthusiast. I have a high proficiency in JavaScript and a user-centered mentality for building products. I also like finances, fitness, hackintoshing and entrepreneurial spirit. Self-taught by nature and constantly learning.</p>
        <a href="#" class="ver-mas" data-mas="Ver más" data-menos="Ver menos">Ver más</a>
        <a href="#" class="ver-menos" data-mas="Ver más" data-menos="Ver menos" style="display:none;">Ver menos</a>
        <a href="#" class="ver-todo" style="display:none;">Ver todo</a>
        <br>
        <br>
        <a href="#" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
    <img src="img/perfil_BrianDuran.jpg" class="card-img-top h-100 w-auto" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brian Duran</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">AI Engineer Analyst</h6>
        <p class="card-text texto-recortado">As an RPA Developer with more than 2 years of experience in the Blue Prism platform, I have participated in banking, finance and administration projects. My skills in front and backend, as well as Excel, Power Bi and Power Apps have complemented my knowledge in RPA, which has allowed me to design efficient solutions for clients. While I am focused on RPA, I am also interested in full stack development and looking to expand my skills in the field. I am looking to face new challenges and add value to the projects in which I participate</p>
        <a href="#" class="ver-mas" data-mas="Ver más" data-menos="Ver menos">Ver más</a>
        <a href="#" class="ver-menos" data-mas="Ver más" data-menos="Ver menos" style="display:none;">Ver menos</a>
        <a href="#" class="ver-todo" style="display:none;">Ver todo</a>
        <br>
        <br>
        <a href="#" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
    <img src="img/perfil_FrancoSancristobal.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Francisco Sancristobal</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Software Developer</h6>
        <p class="card-text texto-recortado">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti atque illum rem iure modi cupiditate culpa nobis impedit ea. Quaerat aliquid obcaecati laborum delectus eius animi doloribus, amet sequi! Libero.</p>
        <a href="#" class="ver-mas" data-mas="Ver más" data-menos="Ver menos">Ver más</a>
        <a href="#" class="ver-menos" data-mas="Ver más" data-menos="Ver menos" style="display:none;">Ver menos</a>
        <a href="#" class="ver-todo" style="display:none;">Ver todo</a>
        <br>
        <br>
        <a href="#" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
    <img src="img/perfil_GonzaloBenavente.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gonzalo Benavente</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Software Developer</h6>
        <p class="card-text texto-recortado">Some quick example text to build on the card title and make up the bulk of the card's content.LOrem Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum saepe voluptatibus impedit accusamus voluptas dolore dicta perferendis nesciunt. Voluptatum odit aliquid perferendis dolorem molestias id quasi nam aspernatur numquam nostrum.</p>
        <a href="#" class="ver-mas" data-mas="Ver más" data-menos="Ver menos">Ver más</a>
        <a href="#" class="ver-menos" data-mas="Ver más" data-menos="Ver menos" style="display:none;">Ver menos</a>
        <a href="#" class="ver-todo" style="display:none;">Ver todo</a>
        <br>
        <br>
        <a href="#" class="btn btn-primary">View Profile</a>
      </div>
    </div>
  </div>
</div>
</div>

<script>
var maxLength = 20; // número máximo de palabras

document.querySelectorAll('.ver-mas').forEach(function (elemento) {
  var textoCompleto = elemento.previousElementSibling.innerHTML.trim();
  if (textoCompleto.split(' ').length > maxLength) {
    var textoRecortado = textoCompleto.split(' ').slice(0, maxLength).join(' ');
    elemento.previousElementSibling.innerHTML = textoRecortado + '...';
    elemento.addEventListener('click', function (event) {
      event.preventDefault();
      if (elemento.previousElementSibling.innerHTML === textoRecortado + '...') {
        elemento.previousElementSibling.innerHTML = textoCompleto;
        elemento.style.display = 'none';
        elemento.nextElementSibling.style.display = 'inline';
      } else {
        elemento.previousElementSibling.innerHTML = textoRecortado + '...';
        elemento.style.display = 'none';
        elemento.nextElementSibling.style.display = 'inline';
        elemento.nextElementSibling.nextElementSibling.style.display = 'inline';
      }
    });
    elemento.nextElementSibling.addEventListener('click', function (event) {
      event.preventDefault();
      elemento.previousElementSibling.innerHTML = textoRecortado + '...';
      elemento.nextElementSibling.style.display = 'none';
      elemento.style.display = 'inline';
      elemento.nextElementSibling.nextElementSibling.style.display = 'none';
    });
    elemento.nextElementSibling.nextElementSibling.addEventListener('click', function (event) {
      event.preventDefault();
      elemento.previousElementSibling.innerHTML = textoCompleto;
      elemento.nextElementSibling.nextElementSibling.style.display = 'none';
      elemento.style.display = 'none';
      elemento.nextElementSibling.style.display = 'inline';
    });
  } else {
    elemento.style.display = 'none';
    elemento.nextElementSibling.style.display = 'none';
  }
});
</script>


</body>
</html>