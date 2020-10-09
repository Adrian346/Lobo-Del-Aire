<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <?php
        
           $sql = ('SELECT * FROM producto');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Productos</caption>';
            echo '<th>ID Producto</th>';
            echo '<th>Codigo</th>';
            echo '<th>Nombre del producto</th>';
            echo '<th>Descripcion del producto</th>';
            echo '<th>Precio venta</th>';
            echo '<th>Maximo de Stock</th>';
            echo '<th>Minimo de Stock</th>';
            echo '<th>Stock</th>';
            echo '<th></th>';
            echo '<th></th>';
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
                    <?php
                    
                    echo "<td>  <a href='pages/cambiosProducto.php?id_producto=".$mostrar[0]."&codigo=".$mostrar[1]."&nombre_producto=".$mostrar[2]."&descripcion_producto=".$mostrar[3]."&precio_venta=".$mostrar[4]."&maximo_en_stock=".$mostrar[5]."&minimo_en_stock=".$mostrar[6]."&stock=".$mostrar[7]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    
                    echo "<td> <a href='pages/eliminarProducto.php?id_producto=".$mostrar[0]."'> <button type='button' class='btn btn-warning btn-block'>Eliminar</button> </a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>
<div>
    <?php
        	$sql1=('SET @precio = 0;');
           $sql = ("CALL  producto_caro(@precio); ");
           $sql2 =('SELECT @precio;');
            $result = mysqli_query($conexion, $sql1);
            $result2 = mysqli_query($conexion, $sql);
            $result3 = mysqli_query($conexion, $sql2);
            echo '<table>';
            echo '<caption>Precio mas alto de un producto</caption>';
            echo '<th>Precio</th>';
            
            while($mostrar = mysqli_fetch_array($result3)){
                ?>

                <tr>
                    <td>$<?php echo $mostrar[0] ?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
<div>
    <?php
        	$sql1=('SET @precio = 0;');
           $sql = ("CALL  producto_barato(@precio); ");
           $sql2 =('SELECT @precio;');
            $result = mysqli_query($conexion, $sql1);
            $result2 = mysqli_query($conexion, $sql);
            $result3 = mysqli_query($conexion, $sql2);
            echo '<table>';
            echo '<caption>Precio mas bajo de un producto</caption>';
            echo '<th>Precio</th>';
            
            while($mostrar = mysqli_fetch_array($result3)){
                ?>

                <tr>
                    <td>$<?php echo $mostrar[0] ?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
<div>
    <?php
        	$sql1=('SET @precio = 0;');
           $sql = ("CALL  cantidadproductos(@precio); ");
           $sql2 =('SELECT @precio;');
            $result = mysqli_query($conexion, $sql1);
            $result2 = mysqli_query($conexion, $sql);
            $result3 = mysqli_query($conexion, $sql2);
            echo '<table>';
            echo '<caption>Cantidad de productos en almacen</caption>';
            echo '<th>En almacen</th>';
            
            while($mostrar = mysqli_fetch_array($result3)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0] ?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
<div>
    <?php
        	$sql1=('SET @precio = 0;');
           $sql = ("CALL  stockmax(@precio); ");
           $sql2 =('SELECT @precio;');
            $result = mysqli_query($conexion, $sql1);
            $result2 = mysqli_query($conexion, $sql);
            $result3 = mysqli_query($conexion, $sql2);
            echo '<table>';
            echo '<caption>Cantidad del producto que hay mas</caption>';
            echo '<th>Maximo</th>';
            
            while($mostrar = mysqli_fetch_array($result3)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0] ?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
<div>
    <?php
        	$sql1=('SET @precio = 0;');
           $sql = ("CALL  stockmin(@precio); ");
           $sql2 =('SELECT @precio;');
            $result = mysqli_query($conexion, $sql1);
            $result2 = mysqli_query($conexion, $sql);
            $result3 = mysqli_query($conexion, $sql2);
            echo '<table>';
            echo '<caption>Cantidad del producto que hay menos</caption>';
            echo '<th>Minimo</th>';
            
            while($mostrar = mysqli_fetch_array($result3)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0] ?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>