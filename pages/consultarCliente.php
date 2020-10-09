<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

?> 


<div>
    <?php
        
            $sql = ('SELECT * FROM cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Clientes</caption>';
            echo '<th>Id</th>';
            echo '<th>Nombre</th>';
            echo '<th>RFC</th>';
            echo '<th>Apellido P</th>';
            echo '<th>Apellido M</th>';
            echo '<th>Celular</th>';
            echo '<th>Email</th>';
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
                    <?php
                    echo "<td>  <a href='pages/cambiosCliente.php/?id_cliente=".$mostrar[0]."&nombre_cliente=".$mostrar[1]."&rfc_cliente=".$mostrar[2]."&apellido_paterno_cliente=".$mostrar[3]."&apellido_materno_cliente=".$mostrar[4]."&celular_cliente=".$mostrar[5]."&email_cliente=".$mostrar[6]."'> <button type='button' class='btn btn-warning btn-block'>Modificar</button> </a> </td>";
                    echo "<td> <a href='pages/eliminarCliente.php?id_cliente=".$mostrar[0]."&nombre_cliente=".$mostrar[1]."&rfc_cliente=".$mostrar[2]."&apellido_paterno_cliente=".$mostrar[3]."&apellido_materno_cliente=".$mostrar[4]."&celular_cliente=".$mostrar[5]."&email_cliente=".$mostrar[6]."'><button type='button' class='btn btn-warning btn-block'>Eliminar</button></a> </td>";
                    ?>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
</div>