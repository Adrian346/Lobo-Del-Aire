<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

  $message = '';

  if (!empty($_POST['codigo']) && !empty($_POST['nombre_producto']) && !empty($_POST['descripcion_producto']) && !empty($_POST['precio_venta']) && !empty($_POST['maximo_en_stock']) && !empty($_POST['minimo_en_stock']) && !empty($_POST['stock']) ) {
    $sql = "CALL agregar_producto( :codigo, :nombre_producto, :descripcion_producto, :precio_venta, :maximo_en_stock, :minimo_en_stock, :stock);";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':nombre_producto', $_POST['nombre_producto']);
    $stmt->bindParam(':codigo', $_POST['codigo']);
    $stmt->bindParam(':descripcion_producto', $_POST['descripcion_producto']);
    $stmt->bindParam(':precio_venta', $_POST['precio_venta']);
    $stmt->bindParam(':maximo_en_stock', $_POST['maximo_en_stock']);
    $stmt->bindParam(':minimo_en_stock', $_POST['minimo_en_stock']);
    $stmt->bindParam(':stock', $_POST['stock']);
      
    if ($stmt->execute()) {
      $message = 'Successfully created new product';
        header('Location: /LoboDelAire/routing.php#!/consultarProducto');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }

?> 

<div>
<h1>Agregar Producto</h1>
    <form class="formulario" action="pages/agregarProducto.php" method="POST">
           
        <input class="text"name="codigo" type="text" placeholder="Codigo de identificacion" required>
        <input class="text" name="nombre_producto" type="text" placeholder="Nombre del Producto" required>
        <input class="text"name="descripcion_producto" type="text" placeholder="Descripcion del Producto" required>
        <input class="text" name="precio_venta" type="number" placeholder="Precio de Venta" step="0.01" required>
        <input class="text" name="maximo_en_stock" type="number" placeholder="Maximo en Stock" required>
        <input class="text" name="minimo_en_stock" type="number" placeholder="Minimo en Stock" required>
        <input class="text" name="stock" type="number" placeholder="Stock" required>
        <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>