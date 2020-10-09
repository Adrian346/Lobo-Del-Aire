<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Productos que compro el Cliente con algun Proveedor</h1>
    <?php
        
           $sql = ('SELECT cliente.id_cliente, cliente.nombre_cliente, producto.id_producto, producto.nombre_producto, proveedor.* FROM cliente INNER JOIN factura_venta ON cliente.id_cliente=factura_venta.id_cliente INNER JOIN detalle_venta ON factura_venta.id_venta=detalle_venta.id_venta_fk 
INNER JOIN producto ON detalle_venta.id_detalle_venta=producto.id_producto INNER JOIN detalle_compra ON producto.id_producto=detalle_compra.id_detalle_compra 
INNER JOIN factura_compra ON detalle_compra.id_compra_fk=factura_compra.id_compra INNER JOIN proveedor ON factura_compra.id_compra=proveedor.id_proveedor ORDER BY cliente.id_cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Cliente</th>';
            echo '<th>Nombre Cliente</th>';
            echo '<th>Id Producto</th>';
            echo '<th>Nombre Producto</th>';
            echo '<th>Id Proveedor</th>';
            echo '<th>Razón Social</th>';
            echo '<th>RFC</th>';
            echo '<th>Nombre Proveedor</th>';
            echo '<th>Email</th>';    
            echo '<th>Celular</th>';    
            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0] ?></td>
                    <td><?php echo $mostrar[1]?></td>
                    <td><?php echo $mostrar[2]?></td>
                    <td><?php echo $mostrar[3]?></td>
                    <td><?php echo $mostrar[4]?></td>
                    <td><?php echo $mostrar[5]?></td>
                    <td><?php echo $mostrar[6]?></td>
                    <td><?php echo $mostrar[7]?></td>
                    <td><?php echo $mostrar[8]?></td>
                    <td><?php echo $mostrar[9]?></td>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>