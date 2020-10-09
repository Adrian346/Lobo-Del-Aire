<?php

 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

	EliminarProducto($_GET['id_producto']);

	function EliminarProducto($id_producto)
	{
		$sentencia="CALL eliminar_producto(".$id_producto.");";
		mysqli_query(mysqli_connect('localhost:3306', 'root', 'root', 'lobodelaire'), $sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='../routing.php#!/consultarProducto';
</script>