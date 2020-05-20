<?php

require ("usarGention.php");

$DNI=$_REQUEST["DNI"];
$nombre=$_REQUEST["nombre"];
$apellidos=$_REQUEST["apellidos"];
$numTelefono = $_REQUEST["numTelefono"];
$direccion = $_REQUEST["direccion"];

$consulta ="UPDATE cliente SET nombre='$nombre',apellidos='$apellido',numTelefono='$numTelefono', direccion='$direccion' WHERE cliente.DNI='$DNI';";
echo ("La instruccion es: $consulta <br>");

if (empty($DNI) || empty($nombre) || empty($apellidos) || empty($numTelefono) || empty($direccion)) {
	echo "Faltan campos por rellenar";
}else{
	if(!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } else{
  	header("Location: insertarCliente.html");
  }
}


?>