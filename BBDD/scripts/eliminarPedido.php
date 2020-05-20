
<html>
  </head>
  <?php
// Se incluye el miniscript que abre la base de datos.
    include ("usarGention.php");
  ?>
  <script language="javascript" type="text/javascript">
    function volver(){
      document.retorno.submit();
    }
  </script>
  </head>

  <body onLoad="javascript:volver();">
  <?php
/* Se crea una consulta para eliminar el pedido que se haya completado en la página principal.
El pedido es creado a través de 'insertarpedido.php', cuyo valor queda asignado a los botones de
radio de la pagina index.php (ver código).*/
    $consulta="DELETE FROM pedido WHERE pedido.numPedido = '$numPedido';";
// Se ejecuta la consulta de eliminación.
     $mysqli->query($consulta);
  

  ?>
  </body>
</html>
