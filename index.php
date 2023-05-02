<?php 
include "includes.php";
include "login.php";
?>

<html>
  <head>
 <?php 
 $titulo = "Identificacion"; 
 getHead($titulo); ?>
  </head>

  <body>  
    <div class="container mt-5 border rounded shadow p-3 mb-5 bg-white rounded contresp">

  <!-- ELEMENTO AGREGADO 27/04 -->
  <a class="icon-link icon-link-hover" style="letter-spacing: 2px; transition: color 0.15s ease-in-out;" href="./about-us.php"><font _mstmutation="1" _msttexthash="226915" _msthash="210"> Sobre Nosotros </font><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
    </svg>
    </a>
    <!-- end -->

  <div align="center" class="pt-5 pl-5 pr-5">
    <h1>Problematica Olimpiadas</h1><br>
    <h5><nav aria-label="breadcrumb">
  <ol class="breadcrumb float justify-content-center bg-white">
    <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
  </ol>
</nav></h5>
<form class="form-signin w-50" method="POST" action="">
    <?php if (isset($errLogin)) { echo $errLogin; } ?>
  <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input type="user" name="user" id="inputEmail" class="form-control" placeholder="Introduzca su usuario" required="" autofocus="" autocomplete="off">
      <label for="inputPassword" class="sr-only">Clave</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Introduzca su clave" required="" autocomplete="off">
            <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Iniciar sesion</button>
    </form><br>
    <p><a href="instalacion.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrarse</a></p>
    <!--<a class="text-muted text-black" href="instalacion.php">Registrarse</a>--><br>
    <a class="text-muted text-black" href="arduino/index.php">Ver estadisticas de Arduino</a><br>
</div>
<!-- Pie de pagina  -->
<div class="footer p-3" align="center">
        <small class="text-muted">EEST N°8 Almafuerte - ET N°1 Otto Krause<br>Bruno Caruso - Franco Sancristobal - Brian Duran - Gonzalo Benavente</small>
    </div>

    <div class="d-flex justify-content-center">
        <a href="about-us.php" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
        <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z">
        </path>
        <path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z">
        </path>
        </svg>
            Sobre Nosotros
        </a>
    </div>
  </div>
  
<!-- Fin Pie de pagina  -->
  </body>
</html>