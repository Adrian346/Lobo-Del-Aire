<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Productos comprados con ese Proveedor</h1>
    <?php
        
           $sql = ('SELECT factura_compra.id_compra, factura_compra.folio_fiscal_compra, producto.* FROM factura_compra INNER JOIN detalle_compra ON  factura_compra.id_compra=detalle_compra.id_compra_fk INNER JOIN producto ON detalle_compra.id_detalle_compra=producto.id_producto ORDER BY factura_compra.id_compra');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Proveedor</th>';
            echo '<th>Nombre Proveedor</th>';
            echo '<th>Id Producto</th>';
            echo '<th>Codigo</th>';
            echo '<th>Nombre</th>';
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