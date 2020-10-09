<?php

  require 'database.php';
  $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');

  $message = '';

  if (!empty($_POST['nombre_cliente']) && !empty($_POST['rfc_cliente']) && !empty($_POST['apellido_paterno_cliente']) && !empty($_POST['apellido_materno_cliente'])  &&  !empty($_POST['celular_cliente'])  && !empty($_POST['email_cliente'])) {
    $sql = "CALL InsertarCliente(:nombre_cliente,:rfc_cliente,:apellido_paterno_cliente,:apellido_materno_cliente,:celular_cliente,:email_cliente)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre_cliente', $_POST['nombre_cliente']);
    $stmt->bindParam(':rfc_cliente', $_POST['rfc_cliente']);
    $stmt->bindParam(':apellido_paterno_cliente', $_POST['apellido_paterno_cliente']);
    $stmt->bindParam(':apellido_materno_cliente', $_POST['apellido_materno_cliente']);
    $stmt->bindParam(':celular_cliente', $_POST['celular_cliente']);
    $stmt->bindParam(':email_cliente', $_POST['email_cliente']);
      
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /lobodelaire/routing.php#!/consultarCliente");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 
<div>
    <h1>Agregar Cliente</h1>
    <form class="formulario" action="pages/agregarCliente.php" method="POST">
        <input class="text"name="nombre_cliente" type="text" placeholder="Nombre" required>
        <input class="text"name="rfc_cliente" type="text" placeholder="rfc" required>
        <input class="text"name="apellido_paterno_cliente" type="text" placeholder="Apellido Pat" required>
        <input class="text"name="apellido_materno_cliente" type="text" placeholder="Apellido Mat" required>
        <input class="text"name="celular_cliente" type="number" placeholder="Celular" required>
        <input class="text"name="email_cliente" type="email" placeholder="email" required>
        <input class="btn btn-warning btn-block"type="submit" value="Enviar">
    </form>
    
</div>

