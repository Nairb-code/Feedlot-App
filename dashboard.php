<?php 
session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
include "includes.php";
if(!isset($_SESSION['idUsuario'])) {
  header("location: index.php");
  }
?>

<html>
  <head>
 <?php 
 $titulo = "Inicio"; 
 getHead($titulo); ?>
  </head>

  <body>  

  <!-- ELEMENTO AGREGADO 27/04 -->
  <a class="icon-link icon-link-hover" style="letter-spacing: 2px; transition: color 0.15s ease-in-out;" href="./about us.php"><font _mstmutation="1" _msttexthash="226915" _msthash="210"> Enlace de icono </font><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
    </svg>
    </a>
    <!-- end -->
    <div class="container mt-5 border rounded shadow p-3 mb-5 bg-white rounded contresp">
      <div align="center" class="pt-5 pl-5 pr-5">
      <h1>Problematica Olimpiadas</h1><br>
      <h5><nav aria-label="breadcrumb">
      <?php getPanelUsuario(); ?>
      <ol class="breadcrumb float justify-content-center bg-white">

      <li class="breadcrumb-item active text-black" aria-current="page" style="
      color: #000;
"><?php echo $titulo; ?></li>
  </ol>
</nav></h5><h6 class="text-muted">Estadisticas generales</h6>
    <br><br>


<div class="card-group resp">
  <div class="card mb-4">
    <div class="card-header">Animales</div>
    <div class="card-body">
      <p class="card-text"><?php 
  // Se realiza la consulta a la base de datos
if ($resultado = mysqli_query($con,"SELECT id,tipo,peso FROM animal LIMIT 5")) {
    // Output: vector con los datos de la tabla
    echo "<table style='font-size: 80%;' cellpadding='4' align=center>
    <thead>
      <tr align=center style='padding: 0.10rem;border: unset;'>
      <th scope='col'>ID</th>
        <th scope='col'>Tipo</th>
        <th scope='col'>Peso</th>
      </tr>
    </thead>
    <tbody>"; 

    // Ejecutamos un while que recorra el vector obtenido por la query almacenada en la variable $resultado
    $fila = mysqli_fetch_array($resultado);

    if ($fila == null) {
          echo "</table>
         Sin datos";

    }else{
    do { 
        echo "<tr>
         <td align=center>".$fila["id"]."</td>
        <td align=center>".$fila["tipo"]."</td>
        <td align=center><span class='badge badge-secondary'>".$fila["peso"]."kg</span></td>";
        
      echo "</tr>";
    } while ($fila = mysqli_fetch_array($resultado));
  }

    echo "</tbody>
  </table>";
} else {
    echo ("<strong>Error al obtener los datos</strong>");
}

?>    </p>
      
    </div>
    <div class="card-footer text-muted">
    <a class="text-muted" href="control/animales.php">Ver todos</a>
  </div>
  </div>
  <div class="card mb-4">
     <div class="card-header">
   Zonas
  </div>
    <div class="card-body">
      <p class="card-text"><?php 
  // Se realiza la consulta a la base de datos
if ($resultado = mysqli_query($con,"SELECT id,tipo,capacidad FROM zona LIMIT 5")) {
    // Output: vector con los datos de la tabla
    echo "<table style='font-size: 80%;' cellpadding='4' align=center>
    <thead>
      <tr align=center>
      <th scope='col'>ID</th>
        <th scope='col'>Tipo</th>
        <th scope='col'>Capacidad</th>
      </tr>
    </thead>
    <tbody>"; 

    // Ejecutamos un while que recorra el vector obtenido por la query almacenada en la variable $resultado
    $fila = mysqli_fetch_array($resultado);

    if ($fila == null) {
           echo "</table>
         Sin datos";

    }else{
    do {
        $medida = obtenerMedida($fila["tipo"]);
        echo "<tr>
         <td align=center>".$fila["id"]."</td>
        <td align=center>".$fila["tipo"]."</td>
        <td align=center><span class='badge badge-secondary'>".$fila["capacidad"]."".$medida."</span></td>";
        
      echo "</tr>";
    } while ($fila = mysqli_fetch_array($resultado));
  }

    echo "</tbody>
  </table>";
} else {
    echo ("<strong>Error al obtener los datos</strong>");
}

?>  </p>
    
    </div>
    <div class="card-footer text-muted">
    <a class="text-muted" href="control/zonas.php">Ver todos</a>
  </div>
  </div>
  <div class="card mb-4">
     <div class="card-header">
   Corrales
  </div>
    <div class="card-body">
     
      <p class="card-text"><?php 
  // Se realiza la consulta a la base de datos
if ($resultado = mysqli_query($con,"SELECT id,tipo,capacidad FROM corral LIMIT 5")) {
    // Output: vector con los datos de la tabla
    echo "<table style='font-size: 80%;' cellpadding='4' align=center>
    <thead>
      <tr align=center>
        <th scope='col'>ID</th>
        <th scope='col'>Tipo</th>
        <th scope='col'>Capacidad</th>
      </tr>
    </thead>
    <tbody>"; 

    // Ejecutamos un while que recorra el vector obtenido por la query almacenada en la variable $resultado
$fila = mysqli_fetch_array($resultado);
/*$medida = obtenerMedida($fila["tipo"]);*/

    if ($fila == null) {
            echo "</table>
         Sin datos";
    }else{
    do { 
      $medida = obtenerMedida($fila["tipo"]);
        echo "<tr>
         <td align=center>".$fila["id"]."</td>
        <td align=center>".$fila["tipo"]."</td>
        <td align=center><span class='badge badge-secondary'>".$fila["capacidad"]."".$medida."</span></td>";
        
      echo "</tr>";
    } while ($fila = mysqli_fetch_array($resultado));
  }

    echo "</tbody>
  </table>";
} else {
    echo ("<strong>Error al obtener los datos</strong>");
}

?>  </p>
    </div>
    <div class="card-footer text-muted">
    <a class="text-muted" href="control/corrales.php">Ver todos</a>
  </div>
  </div>
    <div class="card mb-4">
       <div class="card-header">
   Operadores
  </div>
    <div class="card-body">
      <p class="card-text"><?php 
  // Se realiza la consulta a la base de datos
if ($resultado = mysqli_query($con,"SELECT nombre FROM operador LIMIT 5")) {
    // Output: vector con los datos de la tabla
    echo "<table style='font-size: 80%;' cellpadding='4' align=center>
    <thead>
      <tr align=center>
        <th scope='col'>Nombre y Apellido</th>
      </tr>
    </thead>
    <tbody>"; 

    // Ejecutamos un while que recorra el vector obtenido por la query almacenada en la variable $resultado
$fila = mysqli_fetch_array($resultado);

    if ($fila == null) {
           echo "</table>
         Sin datos";

    }else{
    do { 
        echo "<tr>
        <td align=center>".$fila["nombre"]."</td>";
        
      echo "</tr>";
    } while ($fila = mysqli_fetch_array($resultado));
  }

    echo "</tbody>
  </table>";
} else {
    echo ("<strong>Error al obtener los datos</strong>");
}

?></p>
    </div>
    <div class="card-footer text-muted">
    <a class="text-muted" href="control/operadores.php">Ver todos</a>
  </div>
  </div>
</div>
  <div class="container">
  <div class="row">
    <div class="col mt-3 md-4">
  <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="location.href='control/animales.php'">Control Animales</button>
</div>
<div class="col mt-3 md-4">
  <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="location.href='control/zonas.php'">Control Zonas</button>
</div>
<div class="col mt-3 md-4">
  <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="location.href='control/corrales.php'">Control Corrales</button>
</div>
<div class="col mt-3 md-4">
  <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="location.href='control/operadores.php'">Control Operadores</button>
</div></div><br>  
<a class="text-muted text-black" href="arduino/index.php">Ver estadisticas de Arduino</a><br>

</div>
<!-- Pie de pagina  -->
<div class="m-8"><hr><?php getPiePagina(); ?>
  </div>
  
<!-- Fin Pie de pagina  -->
  </body>
</html>