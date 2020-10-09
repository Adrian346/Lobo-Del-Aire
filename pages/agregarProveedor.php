<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['razon_social_proveedor']) && !empty($_POST['rfc_proveedor']) && !empty($_POST['nombre_proveedor']) && !empty($_POST['email_contacto_proveedor']) && !empty($_POST['celular_contacto_proveedor'])) {
    $sql = "CALL agregar_proveedor(:razon_social_proveedor, :rfc_proveedor, :nombre_proveedor, :email_contacto_proveedor, :celular_contacto_proveedor)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':razon_social_proveedor', $_POST['razon_social_proveedor']);
    $stmt->bindParam(':rfc_proveedor', $_POST['rfc_proveedor']);
    $stmt->bindParam(':nombre_proveedor', $_POST['nombre_proveedor']);
    $stmt->bindParam(':email_contacto_proveedor', $_POST['email_contacto_proveedor']);
    $stmt->bindParam(':celular_contacto_proveedor', $_POST['celular_contacto_proveedor']);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /LoboDelAire/routing.php#!/consultarProveedor");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
    
    <h1>Agregar Proveedor</h1>
    <div class="ko">
    </div>
    <form class="formulario" action="pages/agregarProveedor.php" method="POST" required>
        <input class="text"name="razon_social_proveedor" type="text" placeholder="Razón Social" required>
        <input class="text"name="rfc_proveedor" type="text" placeholder="RFC" required>
        <input class="text"name="nombre_proveedor" type="text" placeholder="Nombre" required>
        <input class="text"name="email_contacto_proveedor" type="email" placeholder="Email" required>
        <input class="text"name="celular_contacto_proveedor" type="number" placeholder="Número de Telefono" required>
        <input class="btn btn-warning btn-block"type="submit" value="Enviar">
    </form>
    
</div>