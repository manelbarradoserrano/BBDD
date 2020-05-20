<html>
  <head>
    <script language="javascript" type="text/javascript">
/* Las siguiente función de JavaScript envía el formulario a la página que corresponda al botón pulsado. */
      function saltar(pagina){
        document.formularioPedidosPrincipal.action=pagina;
    document.formularioPedidosPrincipal.submit();
      }
/* Aquí termina la función de envío del formulario. */
    </script>
	<title>Pedidos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>

  <body>

    <a href="insertarCliente.html">
      Agregar Cliente
    </a> 

    <br>
    <br>

    <a href="insertarPedido.html">
      Agregar Pedido
    </a>

    <br>
    <br>

    <a href="eliminarPedido.html">
      Eliminar Pedido
    </a>

    <br>
    <br>

    <a href="eliminarCliente.html">
      Eliminar Cliente
    </a>

    <br>
    <br>

    <a href="actualizarCliente.html">
      Actualizar Cliente
    </a>

       
    
    </form>
  </body>
</html>