<?php
   $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Facturas en las que se vendió el Producto</h1>
    <?php
        
           $sql = ('SELECT cliente.id_cliente, cliente.nombre_cliente, empleado.* FROM cliente INNER JOIN factura_venta ON cliente.id_cliente=factura_venta.id_cliente INNER JOIN empleado ON factura_venta.id_empleado=empleado.id_empleado ORDER BY cliente.id_cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Producto</th>';
            echo '<th>Nombre Producto</th>';
            echo '<th>Id Venta</th>';
            echo '<th>Id Cliente</th>';
            echo '<th>Id Empleado</th>';
            echo '<th>Folio Fiscal</th>';
            echo '<th>Fecha de Venta</th>';
            echo '<th>Forma de Pago</th>';
            echo '<th>Serie</th>';
            echo '<th>Folio</th>';
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