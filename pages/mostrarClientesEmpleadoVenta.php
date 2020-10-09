<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Clientes y Empleados vendedores</h1>
    <?php
        
           $sql = ('SELECT empleado.id_empleado, empleado.nombre_empleado, cliente.* FROM empleado INNER JOIN factura_venta ON empleado.id_empleado=factura_venta.id_empleado INNER JOIN cliente ON factura_venta.id_cliente=cliente.id_cliente ORDER BY empleado.id_empleado');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Empleado</th>';
            echo '<th>Nombre Empleado</th>';
            echo '<th>Id Cliente</th>';
            echo '<th>Nombre Cliente</th>';
            echo '<th>RFC</th>';
            echo '<th>Apellido Paterno</th>';
            echo '<th>Apellido Materno</th>';
            echo '<th>Fecha de Nacimiento</th>';
            echo '<th>Celular</th>';
            echo '<th>Email</th>';    
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