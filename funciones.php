<?php
function verificar_login($user,$password,&$result){
        include "conexion.php";
        $sql = "SELECT * FROM operador WHERE usuario = '$user' and clave = '$password'";
        $rec = mysqli_query($con,$sql);
        $count = 0;
        while($row = mysqli_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

function getPanelUsuario() {
    ?><div class="container bg-light border rounded p-3" style="width: 34%;">
  <a class="text-muted text-black m-5"><i class="fas fa-user"></i> <?php echo $_SESSION["user"]; ?></a><br><br><small><a class="text-muted text-black m-4" href="control/operador/modificar.php" style="
    line-height: 35px;
">Modificar datos</a></small><br>
<small><a class="text-muted text-black" href="logout.php">Cerrar sesion</a></small></div><br>
    
    <?php
}
    
function getHead($titulo) {
    $root = "http://".$_SERVER['SERVER_NAME'] . "/olimpiadasinet/"; // Directorio root
    /*$root = "http://127.0.0.10/olimpiadasinet/"; // Directorio root*/
    ?>
    <title><?php echo "Olimpiadas - ".$titulo; ?></title>
    <!-- Bootstrap -->
    <?php echo "<link href=".$root."/css/bootstrap.min.css rel='stylesheet'>"; ?>
    <?php echo "<script src=".$root."/js/bootstrap.min.js></script>"; ?>

    <!-- CSS adicional -->
    <?php echo "<link href=".$root."/css/tablas.css rel='stylesheet'>"; ?>
    <?php echo "<link href=".$root."/css/fixes.css rel='stylesheet'>"; ?>

    <!-- FontAwesome -->
    <?php echo "<link href=".$root."/css/fontawesome.css rel='stylesheet'>"; ?>
    <?php echo "<script src=".$root."/js/fontawesome.js></script>"; ?>

    <?php 
} // Output: Olimpiadas - nombreTitulo (en el titulo de las paginas)

function getPiePagina() {
    ?>
    <div class="footer p-3" align="center">
        <small class="text-muted">EEST N°8 Almafuerte - ET N°1 Otto Krause<br>Bruno Caruso - Franco Sancristobal - Brian Duran - Gonzalo Benavente</small>
    </div>

    <!-- BOTON SOBRE NOSOTROS 
    <div class="d-flex justify-content-center">
        <a href="http://127.0.0.10/olimpiadasinet/about-us.php" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
        <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z">
        </path>
        <path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z">
        </path>
        </svg>
            Sobre Nosotros
        </a>
    </div>
-->
<br>

<?php
}

function obtenerMedida ($tipo) { // Output: unidad de medida fisica segun el tipo recibido

    $tipo = strtolower($tipo);

    if ($tipo == "alimentacion" OR $tipo == "pasaje" OR $tipo == "carga de ganado" OR $tipo == "engorda") {
          return "kg";
        }elseif ($tipo == "bebedero" OR $tipo == "lavado") {
          return "ml";
        }elseif ($tipo == "recepcion" OR $tipo == "racionamiento" OR $tipo == "convalescencia" OR $tipo == "corrales" OR $tipo == "enfermeria"){
            return "u";
        }elseif ($tipo == "residuos" OR $tipo == "cuarentena" OR $tipo == "reproduccion" OR $tipo == "tratamiento de enfermos" OR $tipo == "apareamiento" OR $tipo == "maternidad"){
            return "m2" ;
        }
}

?>