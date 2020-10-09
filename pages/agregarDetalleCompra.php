<?php
    
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

  $message = '';

  if (!empty($_POST['id_detalle_compra']) && !empty($_POST['id_compra_fk']) && !empty($_POST['precio_final']) && !empty($_POST['cantidad_compra']) && !empty($_POST['IVA_compra'])) {
    $sql = "CALL agregar_detalle_compra(:id_detalle_compra, :id_compra_fk, :precio_final, :cantidad_compra, :IVA_compra)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id_detalle_compra', $_POST['id_detalle_compra']);
    $stmt->bindParam(':id_compra_fk', $_POST['id_compra_fk']);
    $stmt->bindParam(':precio_final', $_POST['precio_final']);
    $stmt->bindParam(':cantidad_compra', $_POST['cantidad_compra']);
    $stmt->bindParam(':IVA_compra', $_POST['IVA_compra']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /LoboDelAire/routing.php#!/consultarDetalleCompra');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
<br><br>
            <h1>Agregar Detalle compra</h1>
    <form class="formulario" action="pages/agregarDetalleCompra.php" method="POST">
        <?php
        
            $sql = ('SELECT * FROM producto');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_detalle_compra" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_producto']?>">ID: <?php echo $mostrar['id_producto']?> <?php echo $mostrar['nombre_producto']?> </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        
        <?php
        
            $sql = ('SELECT * FROM factura_compra');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_compra_fk" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_compra']?>">ID: <?php echo $mostrar['id_compra']?> <?php echo $mostrar['folio_fiscal_compra']?> </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        
        <input class="text" name="precio_final" type="number" placeholder="Precio" step="0.01" required>
        <input class="text" name="cantidad_compra" type="number" placeholder="Cantidad" required>
        <input class="text" name="IVA_compra" type="number" placeholder="Iva" step="0.01" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>