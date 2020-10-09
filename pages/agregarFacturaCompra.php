<?php
    
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

  $message = '';

  if (!empty($_POST['id_proveedor']) && !empty($_POST['folio_fiscal_compra']) && !empty($_POST['fecha_compra']) && !empty($_POST['forma_pago_compra']) && !empty($_POST['serie_compra']) && !empty($_POST['folio_compra'])) {
    $sql = "CALL agregar_factura_compra(:id_proveedor, :folio_fiscal_compra, :fecha_compra, :forma_pago_compra, :serie_compra, :folio_compra)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id_proveedor', $_POST['id_proveedor']);
    $stmt->bindParam(':folio_fiscal_compra', $_POST['folio_fiscal_compra']);
    $stmt->bindParam(':fecha_compra', $_POST['fecha_compra']);
    $stmt->bindParam(':forma_pago_compra', $_POST['forma_pago_compra']);
    $stmt->bindParam(':serie_compra', $_POST['serie_compra']);
    $stmt->bindParam(':folio_compra', $_POST['folio_compra']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /LoboDelAire/routing.php#!/agregarDetalleDirectoCompra');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
<br><br>
    <h1>Agregar Factura-Compra</h1>
    <form class="formulario" action="pages/agregarFacturaCompra.php" method="POST">
        
        <?php
        
            $sql = ('SELECT * FROM proveedor');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_proveedor" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_proveedor']?>"><?php echo $mostrar['id_proveedor']?> - <?php echo $mostrar['nombre_proveedor']?>   </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        <input class="text" name="folio_fiscal_compra" type="text" placeholder="Folio Fiscal" required>
        <input class="text" name="fecha_compra" type="date" placeholder="Fecha" required>
        <input class="text" name="forma_pago_compra" type="text" placeholder="Forma de Pago" required>
        <input class="text" name="serie_compra" type="text" placeholder="Serie de Compra" required>
        <input class="text" name="folio_compra" type="text" placeholder="Folio de Compra" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>