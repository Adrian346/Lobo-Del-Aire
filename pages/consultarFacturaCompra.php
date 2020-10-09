<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <?php
        
            $sql = ('SELECT * FROM factura_compra');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Facturas de Compra</caption>';
            echo '<th>Id Compra</th>';
            echo '<th>Id Proveedor</th>';
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
                    <?php
                    echo "<td>  <a href='pages/cambiosFacturaCompra.php?id_compra=".$mostrar[0]."&id_proveedor=".$mostrar[1]."&folio_fiscal_compra=".$mostrar[2]."&fecha_compra=".$mostrar[3]."&forma_pago_compra=".$mostrar[4]."&serie_compra=".$mostrar[5]."&folio_compra=".$mostrar[6]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    echo "<td> <a href='pages/eliminarFacturaCompra.php?id_compra=".$mostrar[0]."&id_proveedor=".$mostrar[1]."&folio_fiscal_compra=".$mostrar[2]."&fecha_compra=".$mostrar[3]."&forma_pago_compra=".$mostrar[4]."&serie_compra=".$mostrar[5]."&folio_compra=".$mostrar[6]."'><button type='button' class='btn btn-warning btn-block'>Eliminar</button></a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>
<div>
    
    <?php
        
            $sql = ('SELECT * FROM facturas_efectivo_compra_view');
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
        
            $sql = ('SELECT * FROM facturas_credito_compra_view');
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