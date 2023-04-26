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
