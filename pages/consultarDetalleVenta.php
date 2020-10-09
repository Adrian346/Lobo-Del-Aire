<?php
  $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 

<div>
    <?php
        
            $sql = ('SELECT * FROM detalle_venta');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Detalles de Venta</caption>';
            echo '<th>Id Producto</th>';
            echo '<th>Id Factura</th>';
            echo '<th>Precio Final</th>';
            echo '<th>Cantidad</th>';
            echo '<th>IVA</th>';
            echo '<th>Total</th>';
            echo '<th></th>';
            echo '<th></th>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0]?></td>
                    <td><?php echo $mostrar[1]?></td>
                    <td><?php echo $mostrar[2]?></td>
                    <td><?php echo $mostrar[3]?></td>
                    <td><?php echo $mostrar[4]?></td>
                    <td><?php echo ($mostrar[2]*$mostrar[3])*$mostrar[4]+($mostrar[2]*$mostrar[3])?></td>
                    <?php
                    echo "<td>  <a href='pages/cambiosDetalleVenta.php?id_detalle_venta=".$mostrar[0]."&id_venta_fk=".$mostrar[1]."&precio_final=".$mostrar[2]."&cantidad_venta=".$mostrar[3]."&IVA_venta=".$mostrar[4]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    echo "<td> <a href='pages/eliminarDetalleVenta.php?id_detalle_venta=".$mostrar[0]."&id_venta_fk=".$mostrar[1]."'><button type='button' class='btn btn-warning btn-block'>Eliminar</button></a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>