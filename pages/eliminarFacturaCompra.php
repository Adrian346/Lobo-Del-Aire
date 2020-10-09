<?php

 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';


	EliminarProducto($_GET['id_compra']);

	function EliminarProducto($id_compra)
	{
		$sentencia="CALL eliminar_factura_compra(".$id_compra.")";
		mysqli_query(mysqli_connect('localhost:3306', 'root', 'root', 'lobodelaire'), $sentencia);
	}
?>



<script type="text/javascript">
	alert("Factura Eliminada exitosamente");
	window.location.href='../routing.php#!/consultarFacturaCompra';
</script>