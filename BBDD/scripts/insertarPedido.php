<?php

require ("usarGention.php");

$numpedido=$_REQUEST["numpedido"];
$DNIcliente=$_REQUEST["DNIcliente"];
$direccioncliente=$_REQUEST["direccioncliente"];
$numtelefonorepartidor = $_REQUEST["numtelefonorepartidor"];

$consulta ="INSERT INTO pedido (numpedido, DNIcliente,direccioncliente,numtelefonorepartidor) VALUES ('$numpedido','$DNIcliente','$direccioncliente','$numtelefonorepartidor');";
echo ("La instruccion es: $consulta <br>");

if (empty($numpedido) || empty($DNIcliente) || empty($direccioncliente) || empty($numtelefonorepartidor)) {
  echo "Faltan campos por rellenar";
}else{
  if(!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } else{
    header("Location: insertarPedido.html");
  }
}

?>