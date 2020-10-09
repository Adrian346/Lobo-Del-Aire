<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

    $message = '';
    if (!empty($_POST['id_proveedor']) && !empty($_POST['razon_social_proveedor']) && !empty($_POST['rfc_proveedor']) && !empty($_POST['nombre_proveedor']) && !empty($_POST['email_contacto_proveedor']) && !empty($_POST['celular_contacto_proveedor'])) {
        $sql = "UPDATE proveedor SET razon_social_proveedor=:razon_social_proveedor, rfc_proveedor=:rfc_proveedor, nombre_proveedor=:nombre_proveedor, email_contacto_proveedor=:email_contacto_proveedor, celular_contacto_proveedor=:celular_contacto_proveedor WHERE id_proveedor=:id_proveedor";
        
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_proveedor', $_POST['id_proveedor']);
    $stmt->bindParam(':razon_social_proveedor', $_POST['razon_social_proveedor']);
    $stmt->bindParam(':rfc_proveedor', $_POST['rfc_proveedor']);
    $stmt->bindParam(':nombre_proveedor', $_POST['nombre_proveedor']);
    $stmt->bindParam(':email_contacto_proveedor', $_POST['email_contacto_proveedor']);
    $stmt->bindParam(':celular_contacto_proveedor', $_POST['celular_contacto_proveedor']);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /LoboDelAire/routing.php#!/");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 


<div>
    <?php
        
            $sql = ('SELECT * FROM proveedor');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Proveedores</caption>';
            echo '<th>Id</th>';
            echo '<th>Razón Social</th>';
            echo '<th>RFC</th>';
            echo '<th>Nombre</th>';
            echo '<th>Email</th>';
            echo '<th>Teléfono</th>';
            echo '<th></th>';
            echo '<th></th>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0] ?></td>
                    <td><?php echo $mostrar[1]?></td>
                    <td><?php echo $mostrar[2]?></td>
                    <td><?php echo $mostrar[3]?></td>
                    <td><?php echo $mostrar[4]?></td>
                    <td><?php echo $mostrar[5]?></td>
                    <?php
                    echo "<td>  <a href='pages/cambiosProveedor.php?id_proveedor=".$mostrar[0]."&razon_social_proveedor=".$mostrar[1]."&rfc_proveedor=".$mostrar[2]."&nombre_proveedor=".$mostrar[3]."&email_contacto_proveedor=".$mostrar[4]."&celular_contacto_proveedor=".$mostrar[5]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    echo "<td> <a href='pages/eliminarProveedor.php?id_proveedor=".$mostrar[0]."&razon_social_proveedor=".$mostrar[1]."&rfc_proveedor=".$mostrar[2]."&nombre_proveedor=".$mostrar[3]."&email_contacto_proveedor=".$mostrar[4]."&celular_contacto_proveedor=".$mostrar[5]."'><button type='button' class='btn btn-warning btn-block'>Eliminar</button></a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>