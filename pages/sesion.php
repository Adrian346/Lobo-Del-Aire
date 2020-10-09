<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id_doc, correo, contrasena_doc, nombre_doc, apellido_doc FROM doctor WHERE id_doc = :id_doc');
    $records->bindParam(':id_doc', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>