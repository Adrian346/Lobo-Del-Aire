<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Productos que vendió algun Empleado</h1>
    <?php
        
           $sql = ('SELECT empleado.id_empleado, empleado.nombre_empleado, producto.* FROM empleado INNER JOIN factura_venta ON empleado.id_empleado=factura_venta.id_cliente INNER JOIN detalle_venta ON factura_venta.id_venta=detalle_venta.id_venta_fk 
INNER JOIN producto ON detalle_venta.id_detalle_venta=producto.id_producto ORDER BY empleado.id_empleado');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Empleado</th>';
            echo '<th>Nombre Empleado</th>';
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