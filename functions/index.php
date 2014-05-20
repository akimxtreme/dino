<body>
<html>
<?php
require_once ("conexion.php");
$miconexion = new DB_mysql ;
$miconexion->conectar("prueba", "localhost", "root", "1234");
$miconexion->consulta("SELECT apellido FROM datos");
$miconexion->verconsulta();

$miconexion->consulta("SELECT nombre FROM datos");
$miconexion->verconsulta();

$miconexion->consulta("SELECT id FROM datos");
$miconexion->verconsulta();
?>
</body>
</html>
