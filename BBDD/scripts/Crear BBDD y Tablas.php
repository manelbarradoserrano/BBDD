
<?php
$servidor="localhost";
$usuario="root";
$clave=""; 

@$mysqli = new mysqli($servidor,$usuario,$clave);  //@ evita que se displayen los errores y avisos que genere la instrucción
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error. " ". $mysqli->connect_errno ;
    die (" SALIDA DEL PROGRAMA. Error acceso a BBDD");
}
else  echo ("SE HA CONECTADO AL SERVIDOR MySQL.");


$consulta ="CREATE DATABASE IF NOT EXISTS Hotel";

if (!$resultado = $mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  }
  
?>

<?php
$servidor="localhost";
$usuario="root";
$clave=""; 

@$mysqli = new mysqli($servidor,$usuario,$clave);  //@ evita que se displayen los errores y avisos que genere la instrucción
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error. " ". $mysqli->connect_errno ;
    die (" SALIDA DEL PROGRAMA. Error acceso a BBDD");
}
else  echo ("SE HA CONECTADO AL SERVIDOR MySQL.");


$basedatos ="Hotel";
$mysqli->select_db($basedatos);

$consulta="CREATE TABLE IF NOT EXISTS cliente ";
$consulta.="(IDCliente int AUTO INCREMENT,";
$consulta.="DNI VARCHAR(9), ";
$consulta.="Nombre VARCHAR(45), ";
$consulta.="Apellidos VARCHAR(45), ";
$consulta.="NumTelf int, ";
$consulta.="PRIMARY KEY (IDCliente), FOREIGN KEY (IDCliente) REFERENCES habitaciones(Numero), ";


if (!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  }
  
$consulta="CREATE TABLE IF NOT EXISTS cliente ";
$consulta.="(DNI VARCHAR(9),";
$consulta.="nombre VARCHAR(45), ";
$consulta.="apellidos VARCHAR(45), ";
$consulta.="numTelefono VARCHAR(9), ";
$consulta.="direccion VARCHAR(45), ";
$consulta.="PRIMARY KEY (DNI));";

if (!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } 

$consulta="CREATE TABLE IF NOT EXISTS repartidor ";
$consulta.="(numTelefono VARCHAR(9), ";
$consulta.="PRIMARY KEY (numTelefono));";

if (!$resultado=$mysqli->query($consulta))
  {echo "Lo sentimos. La Aplicación no funciona<br>";
   echo "Error. en la consulta: ".$consulta."<br>";
   echo "Num.error: ".$mysqli->errno."<br>";
   echo "Error: ".$mysqli->error. "<br>";
   exit;
  } 
?>
