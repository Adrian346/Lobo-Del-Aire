<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Productos que se vendieron a ese Cliente</h1>
    <?php
        
           $sql = ('SELECT cliente.id_cliente, cliente.nombre_cliente, producto.* FROM cliente INNER JOIN factura_venta ON cliente.id_cliente=factura_venta.id_cliente INNER JOIN detalle_venta ON factura_venta.id_venta=detalle_venta.id_venta_fk 
INNER JOIN producto ON detalle_venta.id_detalle_venta=producto.id_producto ORDER BY cliente.id_cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Cliente</th>';
            echo '<th>Nombre Cliente</th>';
            echo '<th>Id Producto</th>';
            echo '<th>Codigo</th>';
            echo '<th>Nombre Producto</th>';
            echo '<th>Descripcion</th>';
            echo '<th>Precio</th>';
            echo '<th>Máximo en Stock</th>';
            echo '<th>Mínimo en Stock</th>';
            echo '<th>En Stock</th>';
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