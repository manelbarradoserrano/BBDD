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


$basedatos ="hotel";
$mysqli->select_db($basedatos);



?>
