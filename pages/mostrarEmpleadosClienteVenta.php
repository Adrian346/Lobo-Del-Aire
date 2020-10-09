<?php
   $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <h1>Empleados a los cuales les compró un Cliente</h1>
    <?php
        
           $sql = ('SELECT cliente.id_cliente, cliente.nombre_cliente, empleado.* FROM cliente INNER JOIN factura_venta ON cliente.id_cliente=factura_venta.id_cliente INNER JOIN empleado ON factura_venta.id_empleado=empleado.id_empleado ORDER BY cliente.id_cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<th>ID Cliente</th>';
            echo '<th>Nombre Cliente</th>';
            echo '<th>Id Empleado</th>';
            echo '<th>NSS Empleado</th>';
            echo '<th>Nombre Empleado</th>';
            echo '<th>Apellido Paterno</th>';
            echo '<th>Apellido Materno</th>';
            echo '<th>Salario Semanal</th>';
            echo '<th>Fecha de Pago</th>';
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
                    <td><?php echo $mostrar[10]?></td>
                    <td><?php echo $mostrar[11]?></td>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    
</div>