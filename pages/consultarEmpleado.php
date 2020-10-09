<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';
?> 


<div>
    <?php
        
            $sql = ('SELECT * FROM empleado');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Empleados</caption>';
            echo '<th>Id</th>';
            echo '<th>NSS</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellidos</th>';
            echo '<th>Salario Semanal P</th>';
            echo '<th>Dia de Pago M</th>';
            echo '<th>Celular</th>';
            echo '<th>Email</th>';
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
                    echo "<td>  <a href='pages/cambiosEmpleado.php?id_empleado=".$mostrar[0]."&numero_seguro_social_empleado=".$mostrar[1]."&nombre_empleado=".$mostrar[2]."&apellido_paterno_empleado=".$mostrar[3]."&salario_semanal_empleado=".$mostrar[4]."&fecha_de_pago_empleado=".$mostrar[5]."&celular_empleado=".$mostrar[6]."&email_empleado=".$mostrar[7]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    echo "<td> <a href='pages/eliminarEmpleado.php?id_empleado=".$mostrar[0]."&numero_seguro_social_empleado=".$mostrar[1]."&nombre_empleado=".$mostrar[2]."&apellido_paterno_empleado=".$mostrar[3]."&salario_semanal_empleado=".$mostrar[4]."&fecha_de_pago_empleado=".$mostrar[5]."&celular_empleado=".$mostrar[6]."&email_empleado=".$mostrar[7]."'><button type='button' class='btn btn-warning btn-block'>Eliminar</button></a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
<div>
    
    <?php
        
            $sql = ('SELECT * FROM empleados_bien_pagados_view');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Empleados bien pagados</caption>';
            echo '<th>Nombre</th>';
            echo '<th>Salario Semanal</th>';

            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0]?></td>
                    <td><?php echo $mostrar[1]?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>

<div>
    
    <?php
        
            $sql = ('SELECT * FROM proximos_en_ser_pagados_view');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Proximos en ser pagados en este mes</caption>';
            echo '<th>Nombre</th>';
            echo '<th>Fia en ser pagado</th>';

            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar[0]?></td>
                    <td><?php echo $mostrar[1]?></td>
                   
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>
