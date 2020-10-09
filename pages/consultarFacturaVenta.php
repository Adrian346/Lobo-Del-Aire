<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <?php
        
            $sql = ('SELECT * FROM factura_venta');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Facturas de Venta</caption>';
            echo '<th>Id Venta</th>';
            echo '<th>Id Cliente</th>';
            echo '<th>Id Empleado</th>';
            echo '<th>Folio Fiscal</th>';
            echo '<th>Fecha</th>';
            echo '<th>Forma de Pago</th>';
            echo '<th>Seire</th>';
            echo '<th>Folio</th>';
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
                    <td><?php echo $mostrar[5]?></td>
                    <td><?php echo $mostrar[6]?></td>
                    <td><?php echo $mostrar[7]?></td>
                    <?php
                    echo "<td>  <a href='pages/cambiosFacturaVenta.php?id_venta=".$mostrar[0]."&id_cliente=".$mostrar[1]."&id_empleado=".$mostrar[2]."&folio_fiscal_venta=".$mostrar[3]."&fecha_venta=".$mostrar[4]."&forma_pago_venta=".$mostrar[5]."&serie_venta=".$mostrar[6]."&folio_venta=".$mostrar[7]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    echo "<td> <a href='pages/eliminarFacturaCompra.php?id_venta=".$mostrar[0]."&id_cliente=".$mostrar[1]."'><button type='button' class='btn btn-warning btn-block'>Eliminar</button></a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>
<div>
    
    <?php
        
            $sql = ('SELECT * FROM facturas_efectivo_venta_view');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Facturas pagadas en efectivo</caption>';
            echo '<th>Folio Fiscal</th>';
            echo '<th>Serie</th>';
            echo '<th>Folio</th>';

            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0]?></td>
                    <td><?php echo $mostrar[1]?></td>
                    <td><?php echo $mostrar[2]?></td>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
<div>
    
    <?php
        
            $sql = ('SELECT * FROM facturas_credito_venta_view');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Facturas pagadas a credito</caption>';
            echo '<th>Folio Fiscal</th>';
            echo '<th>Serie</th>';
            echo '<th>Folio</th>';

            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0]?></td>
                    <td><?php echo $mostrar[1]?></td>
                    <td><?php echo $mostrar[2]?></td>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>