<?php
    
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

  $message = '';

  if (!empty($_POST['id_cliente']) && !empty($_POST['id_empleado']) && !empty($_POST['folio_fiscal_venta']) && !empty($_POST['fecha_venta']) && !empty($_POST['forma_pago_venta']) && !empty($_POST['serie_venta']) && !empty($_POST['folio_venta'])) {
    $sql = "CALL agregar_factura_venta(:id_cliente,:id_empleado ,:folio_fiscal_venta, :fecha_venta, :forma_pago_venta, :serie_venta, :folio_venta)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id_cliente', $_POST['id_cliente']);
    $stmt->bindParam(':id_empleado', $_POST['id_empleado']);
    $stmt->bindParam(':folio_fiscal_venta', $_POST['folio_fiscal_venta']);
    $stmt->bindParam(':fecha_venta', $_POST['fecha_venta']);
    $stmt->bindParam(':forma_pago_venta', $_POST['forma_pago_venta']);
    $stmt->bindParam(':serie_venta', $_POST['serie_venta']);
    $stmt->bindParam(':folio_venta', $_POST['folio_venta']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /LoboDelAire/routing.php#!/agregarDetalleDirectoVenta');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
<br><br>
    <h1>Agregar Factura-Venta</h1>
    <form class="formulario" action="pages/agregarFacturaVenta.php" method="POST">
        
        <?php
        
            $sql = ('SELECT * FROM cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_cliente" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_cliente']?>"><?php echo $mostrar['id_cliente']?> - <?php echo $mostrar['nombre_cliente']?>   </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        <?php
        
            $sql = ('SELECT * FROM empleado');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_empleado" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_empleado']?>"><?php echo $mostrar['id_empleado']?> - <?php echo $mostrar['nombre_empleado']?>   </option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        <input class="text" name="folio_fiscal_venta" type="text" placeholder="Folio Fiscal" required>
        <input class="text" name="fecha_venta" type="date" placeholder="Fecha" required>
        <input class="text" name="forma_pago_venta" type="text" placeholder="Forma de Pago" required>
        <input class="text" name="serie_venta" type="text" placeholder="Serie de Compra" required>
        <input class="text" name="folio_venta" type="text" placeholder="Folio de Compra" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>