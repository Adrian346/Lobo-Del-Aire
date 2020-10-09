<?php

 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';


	EliminarProducto($_GET['id_venta']);

	function EliminarProducto($id_venta)
	{
		$sentencia="CALL eliminar_factura_venta(".$id_venta.")";
		mysqli_query(mysqli_connect('localhost:3306', 'root', 'root', 'lobodelaire'), $sentencia);
	}
?>



<script type="text/javascript">
	alert("Factura Eliminada exitosamente");
	window.location.href='../routing.php#!/consultarFacturaVenta';
</script>