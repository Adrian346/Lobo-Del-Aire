<?php
    
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

  $message = '';

  if (!empty($_POST['id_detalle_venta']) && !empty($_POST['id_venta_fk']) && !empty($_POST['precio_final']) && !empty($_POST['cantidad_venta']) && !empty($_POST['IVA_venta'])) {
    $sql = "CALL agregar_detalle_venta(:id_detalle_venta, :id_venta_fk, :precio_final, :cantidad_venta, :IVA_venta)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id_detalle_venta', $_POST['id_detalle_venta']);
    $stmt->bindParam(':id_venta_fk', $_POST['id_venta_fk']);
    $stmt->bindParam(':precio_final', $_POST['precio_final']);
    $stmt->bindParam(':cantidad_venta', $_POST['cantidad_venta']);
    $stmt->bindParam(':IVA_venta', $_POST['IVA_venta']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /LoboDelAire/routing.php#!/consultarDetalleVenta');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
<br><br>
            <h1>Agregar Detalle Venta</h1>
    <form class="formulario" action="pages/agregarDetalleVenta.php" method="POST">

        <?php
        
            $sql = ('SELECT * FROM producto');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_detalle_venta" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_producto']?>">ID: <?php echo $mostrar['id_producto']?> <?php echo $mostrar['nombre_producto']?> </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        
        <?php
        
            $sql = ('SELECT * FROM factura_venta');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_venta_fk" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_venta']?>">ID: <?php echo $mostrar['id_venta']?> <?php echo $mostrar['folio_fiscal_venta']?> </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        
        <input class="text" name="precio_final" type="number" placeholder="Precio" step="0.01" required>
        <input class="text" name="cantidad_venta" type="number" placeholder="Cantidad" required>
        <input class="text" name="IVA_venta" type="number" placeholder="Iva" step="0.01" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>