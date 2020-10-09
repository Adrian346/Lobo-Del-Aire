<?php

 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';


	EliminarProducto($_GET['id_detalle_compra'], $_GET['id_compra_fk']);

	function EliminarProducto($id_detalle_compra, $id_compra_fk)
	{
        $sentencia="CALL eliminar_detalle_compra(".$id_detalle_compra.", ".$id_compra_fk.");";
		//$sentencia="DELETE detalle_compra.* FROM detalle_compra WHERE id_compra='".$id_compra."' AND id_compra_fk='".$id_compra_fk."' ";
		mysqli_query(mysqli_connect('localhost:3306', 'root', 'root', 'lobodelaire'), $sentencia);
	}
?>



<script type="text/javascript">
	alert("Detalle de Compra Eliminado exitosamente");
	window.location.href='../routing.php#!/consultarDetalleCompra';
</script>