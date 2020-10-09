<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Facturas con algun producto comprado</h1>
    <?php
        
           $sql = ('SELECT producto.id_producto, producto.nombre_producto, factura_compra.* FROM producto INNER JOIN detalle_compra ON  producto.id_producto=detalle_compra.id_detalle_compra INNER JOIN factura_compra ON detalle_compra.id_compra_fk=factura_compra.id_compra ORDER BY producto.id_producto');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Producto</th>';
            echo '<th>Nombre del Producto</th>';
            echo '<th>Id Compra</th>';
            echo '<th>Id Proveedor</th>';
            echo '<th>Folio Fiscal</th>';
            echo '<th>Fecha</th>';
            echo '<th>Forma de Pago</th>';
            echo '<th>Seire</th>';
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
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>