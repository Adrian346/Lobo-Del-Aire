

<?php
require '../pages/sesion.php';
 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

    $message = '';
    if (!empty($_POST['id_compra']) && !empty($_POST['id_proveedor']) && !empty($_POST['folio_fiscal_compra']) && !empty($_POST['fecha_compra']) && !empty($_POST['forma_pago_compra']) && !empty($_POST['serie_compra']) && !empty($_POST['folio_compra'])) {
        $sql = "UPDATE factura_compra SET id_proveedor=:id_proveedor, folio_fiscal_compra=:folio_fiscal_compra, fecha_compra=:fecha_compra, forma_pago_compra=:forma_pago_compra, serie_compra=:serie_compra, folio_compra=:folio_compra WHERE id_compra=:id_compra";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_compra', $_POST['id_compra']);
    $stmt->bindParam(':id_proveedor', $_POST['id_proveedor']);
    $stmt->bindParam(':folio_fiscal_compra', $_POST['folio_fiscal_compra']);
    $stmt->bindParam(':fecha_compra', $_POST['fecha_compra']);
    $stmt->bindParam(':forma_pago_compra', $_POST['forma_pago_compra']);
    $stmt->bindParam(':serie_compra', $_POST['serie_compra']);
    $stmt->bindParam(':folio_compra', $_POST['folio_compra']);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /LoboDelAire/routing.php#!/consultarFacturaCompra");
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
                        <li class="active"><a href="/LoboDelAire/routing.php#!/consultarFacturaCompra"><span class="glyphicon glyphicon-home"
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
        
        
        <div id="main">
            <div>
                <h1>Cambiar Datos Factura</h1>
                <form class="formulario" action="cambiosFacturaCompra.php" method="POST">
            
                    <input type="hidden" name="id_compra" value="<?php echo $_GET['id_compra']?> ">
                    
                    <?php
        
                    $sql = ('SELECT * FROM proveedor');
                    $result = mysqli_query($conexion, $sql);
                    echo '<select class="text" name="id_proveedor" required>';
                    while($mostrar = mysqli_fetch_array($result)){
                    ?>
                
                        <option value="<?php echo $mostrar['id_proveedor']?>"><?php echo $mostrar['id_proveedor']?>  - <?php echo $mostrar['nombre_proveedor']?></option>
                    <?php                
                    }
        
                    echo "</select>";
                    ?>
                    <input class="text"name="folio_fiscal_compra" type="text" value="<?php echo $_GET['folio_fiscal_compra']?>">
                    <input class="text"name="fecha_compra" type="date" value="<?php echo $_GET['fecha_compra'] ?>">
                    <input class="text"name="forma_pago_compra" type="text" value="<?php echo $_GET['forma_pago_compra'] ?>">
                    <input class="text"name="serie_compra" type="text" value="<?php echo $_GET['serie_compra'] ?>">
                    <input class="text"name="folio_compra" type="text" value="<?php echo $_GET['folio_compra'] ?>">
                    <input class="btn btn-warning btn-block" type="submit" value="Enviar">
          
                </form>
    
            </div>
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