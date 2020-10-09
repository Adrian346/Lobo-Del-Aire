<?php

 $conexion = mysqli_connect('localhost:3306', 'root', '', 'lobodelaire');
  require 'database.php';

    $message = '';
    if (!empty($_POST['numero_seguro_social_empleado']) && !empty($_POST['nombre_empleado']) && !empty($_POST['apellido_paterno_empleado']) && !empty($_POST['salario_semanal_empleado'])  &&  !empty($_POST['fecha_de_pago_empleado'])  && !empty($_POST['celular_empleado']) && !empty($_POST['email_empleado'])) {
        $sql =  "CALL ModificarEmpleado(:id_empleado,:numero_seguro_social_empleado,:nombre_empleado,:apellido_paterno_empleado,:salario_semanal_empleado,:fecha_de_pago_empleado,:celular_empleado,:email_empleado)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_empleado', $_POST['id_empleado']);
    $stmt->bindParam(':numero_seguro_social_empleado', $_POST['numero_seguro_social_empleado']);
    $stmt->bindParam(':nombre_empleado', $_POST['nombre_empleado']);
    $stmt->bindParam(':apellido_paterno_empleado', $_POST['apellido_paterno_empleado']);
    $stmt->bindParam(':salario_semanal_empleado', $_POST['salario_semanal_empleado']);
    $stmt->bindParam(':fecha_de_pago_empleado', $_POST['fecha_de_pago_empleado']);
    $stmt->bindParam(':celular_empleado', $_POST['celular_empleado']);
    $stmt->bindParam(':email_empleado', $_POST['email_empleado']);
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /LoboDelAire/routing.php#!/consultarEmpleado");
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
                        <li class="active"><a href="/LoboDelAire/routing.php#!/consultarEmpleado"><span class="glyphicon glyphicon-home"
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
   <h1>Cambiar datos Empleado</h1>
   <form role="form" class="formulario" action="cambiosEmpleado.php" method="POST">
           
            <input type="hidden" name="id_empleado" value="<?php echo $_GET['id_empleado']?> ">
            <input class="text"name="numero_seguro_social_empleado" type="number" value="<?php echo $_GET['numero_seguro_social_empleado']?>">
            <input class="text"name="nombre_empleado" type="text" value="<?php echo $_GET['nombre_empleado'] ?>">
            <input class="text"name="apellido_paterno_empleado" type="text" value="<?php echo $_GET['apellido_paterno_empleado'] ?>">
            <input class="text"name="salario_semanal_empleado" type="number" value="<?php echo $_GET['salario_semanal_empleado'] ?>">
            <input class="text"name="fecha_de_pago_empleado" type="number" value="<?php echo $_GET['fecha_de_pago_empleado'] ?>">
            <input class="text"name="celular_empleado" type="number" value="<?php echo $_GET['celular_empleado'] ?>">
            <input class="text"name="email_empleado" type="email" value="<?php echo $_GET['email_empleado'] ?>">
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
          
    </form>
    
</div>