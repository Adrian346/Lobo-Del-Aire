<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['numero_seguro_social_empleado']) && !empty($_POST['nombre_empleado']) && !empty($_POST['apellido_paterno_empleado']) && !empty($_POST['salario_semanal_empleado'])  &&  !empty($_POST['fecha_de_pago_empleado'])  && !empty($_POST['celular_empleado']) && !empty($_POST['email_empleado'])) {
    $sql = "CALL InsertarEmpleado(:numero_seguro_social_empleado,:nombre_empleado,:apellido_paterno_empleado,:salario_semanal_empleado,:fecha_de_pago_empleado,:celular_empleado,:email_empleado)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':numero_seguro_social_empleado', $_POST['numero_seguro_social_empleado']);
    $stmt->bindParam(':nombre_empleado', $_POST['nombre_empleado']);
    $stmt->bindParam(':apellido_paterno_empleado', $_POST['apellido_paterno_empleado']);
    $stmt->bindParam(':salario_semanal_empleado', $_POST['salario_semanal_empleado']);
    $stmt->bindParam(':fecha_de_pago_empleado', $_POST['fecha_de_pago_empleado']);
    $stmt->bindParam(':celular_empleado', $_POST['celular_empleado']);
    $stmt->bindParam(':email_empleado', $_POST['email_empleado']);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /lobodelaire/routing.php#!/consultarEmpleado");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
    
    <h1>Agregar Empleado</h1>
    <div class="ko">
    </div>
    <form class="formulario" action="pages/agregarEmpleado.php" method="POST" required>
        <input class="text"name="numero_seguro_social_empleado" type="number" placeholder="Seguro social" required>
        <input class="text"name="nombre_empleado" type="text" placeholder="Nombre" required>
        <input class="text"name="apellido_paterno_empleado" type="text" placeholder="Apellido Pat" required>
        <input class="text"name="salario_semanal_empleado" type="number" placeholder="Salario" required>
        <input class="text"name="fecha_de_pago_empleado" type="number" placeholder="Dia Pago" required>
        <input class="text"name="celular_empleado" type="number" placeholder="Celular" required>
        <input class="text"name="email_empleado" type="email" placeholder="email" required>
        <input class="btn btn-warning btn-block"type="submit" value="Enviar">
    </form>
    
</div>