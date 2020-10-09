<?php
    require '../pages/sesion.php';
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

  $message = '';

  if (!empty($_POST['id_cliente']) && !empty($_POST['id_empleado']) && !empty($_POST['folio_fiscal_venta']) && !empty($_POST['fecha_venta']) && !empty($_POST['forma_pago_venta']) && !empty($_POST['serie_venta']) && !empty($_POST['folio_venta'])) {
    $sql = "UPDATE factura_venta  SET id_cliente=:id_cliente, id_empleado=:id_empleado, folio_fiscal_venta=:folio_fiscal_venta, fecha_venta=:fecha_venta, forma_pago_venta=:forma_pago_venta, serie_venta=:serie_venta, folio_venta=:folio_venta WHERE id_venta=".$_POST['id_venta']."";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id_cliente', $_POST['id_cliente']);
    $stmt->bindParam(':id_empleado', $_POST['id_empleado']);
    $stmt->bindParam(':folio_fiscal_venta', $_POST['folio_fiscal_venta']);
    $stmt->bindParam(':fecha_venta', $_POST['fecha_venta']);
    $stmt->bindParam(':forma_pago_venta', $_POST['forma_pago_venta']);
    $stmt->bindParam(':serie_venta', $_POST['serie_venta']);
    $stmt->bindParam(':folio_venta', $_POST['folio_venta']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
      header("Location: /LoboDelAire/routing.php#!/consultarFacturaVenta");
        
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 
<!DOCTYPE html>
<html ng-app="app">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Lobo del aire</title>
    
     <!-- Bootstrap -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap-social.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/about.js"></script>
    
    <link href="../css/mystyles.css" rel="stylesheet">
    <script src="../routing.js"></script>
    </head>
    <body ng-controller="indexController">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <?php if(!empty($user)): ?>
      <span class="glyphicon glyphicon-user"
                         aria-hidden="true"></span> Bienvenido <?= $user['nombre_doc']; ?> <?= $user['apellido_doc'];?>
                <?php endif; ?>
                         
                         
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="../img/logo.png" height=30 width=41></a>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/LoboDelAire/routing.php#!/consultarFacturaVenta"><span class="glyphicon glyphicon-home"
                         aria-hidden="true"></span> Regresar</a></li>
                    </ul>
               
                    <?php require '../pages/partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <ul class="nav navbar-nav navbar-right">
                   <li><a href="../pages/logout.php" data-target="#loginModal">
                       <span class="glyphicon glyphicon-log-in"></span> Logout</a>
                    </li>
        </ul>
    <?php else: ?>
                   <ul class="nav navbar-nav navbar-right">
                   <li><a data-toggle="dropdown" data-target="#loginModal">
                   <span class="glyphicon glyphicon-log-in"></span> Login</a>
                   <ul class="dropdown-menu">
                           <li><a href="#!medico">Médico</a></li>
                           <li><a href="#!Enfermera">Enfermera</a></li>
                    </ul>
                    </li>
                    </ul>
    <?php endif; ?>
                
                
                </div>
               
                
            </div>
                
        </nav> 
<div>  
    <div id="main">
        <h1>Cambios Facturas Venta</h1>
   <form class="formulario" action="cambiosFacturaVenta.php" method="POST">
           
            <input type="hidden" name="id_venta" value="<?php echo $_GET['id_venta']?> ">
            
            <?php
        
            $sql = ('SELECT * FROM cliente');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_cliente" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_cliente']?>"><?php echo $mostrar['id_cliente']?> - <?php echo $mostrar['nombre_cliente']?></option>
            <?php                
            }
        
            echo "</select>";
            ?>
            <?php
        
            $sql = ('SELECT * FROM empleado');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_empleado" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_empleado']?>"><?php echo $mostrar['id_empleado']?> - <?php echo $mostrar['nombre_empleado']?></option>
            <?php                
            }
        
            echo "</select>";
            ?>
            <input class="text"name="folio_fiscal_venta" type="text" value="<?php echo $_GET['folio_fiscal_venta']?>">
            <input class="text"name="fecha_venta" type="date" value="<?php echo $_GET['fecha_venta'] ?>">
            <input class="text"name="forma_pago_venta" typeventa="text" value="<?php echo $_GET['forma_pago_venta'] ?>">
            <input class="text"name="serie_venta" type="text" value="<?php echo $_GET['serie_venta'] ?>">
            <input class="text"name="folio_venta" type="text" value="<?php echo $_GET['folio_venta'] ?>">
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
          
    </form>
    
</div>
 <footer class="row-footer">
        
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                
                </div>
                <div class="col-xs-6 col-sm-5">
                    <h5>Nuestra Direccion</h5> 
                    <address>
                      Lenguajes de Bases de Datos<br>
                      Dto De Sistemas Electronicos<br>
                      UAA<br>
                      <i class="fa fa-phone"></i>: +52 1 449 155 51 77<br>
                      <i class="fa fa-phone"></i>: +52 1 449 329 64 27<br>
                      <i class="fa fa-fax"></i>: +52 1 346 102 14 91<br>
                      <i class="fa fa-envelope"></i>: <a href="mailto:confusion@food.net">al174471@edu.uaa.mx</a>
                   </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center>Â© Copyright Lobo del Aire</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            
    

    </body>
</html>