<?php

 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

 /*   $message = '';
        $sql = "DELETE FROM proveedor WHERE id_proveedor='".$id_proveedor."' ";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_proveedor', $_GET['id_proveedor']);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /LoboDelAire/routing.php#!/");

    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }*/
  EliminarProducto($_GET['id_empleado']);

	function EliminarProducto($id_empleado)
	{
		$sentencia="CALL EliminarEmpleado('".$id_empleado."')";
		mysqli_query(mysqli_connect('localhost:3306', 'root', 'root', 'lobodelaire'), $sentencia);
	}
?>



<script type="text/javascript">
	alert("Empleado eliminado exitosamente");
	window.location.href='../routing.php#!/consultarEmpleado';
</script>