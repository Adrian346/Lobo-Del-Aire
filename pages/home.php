<div>

<header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            <div class="row row-header">
                <div class ="col-xs-12 col-sm-6">
                    <h1>Seguro en linea</h1>
                    <p style="padding:10px;"></p>
                    <p>Seguro en linea es la plataforma en linea desarrollada bajo el goobierno del presidente electo Andres Manuel Lopez Obrador
                    para apoyo de las comunidades que no tienen disponibilidad de un hospital cercano. En esta plataforma podrás desarrollarte
                    en tu ámbito para ayudar a dichas comunidades desde la comunidad de tu casa y en tus tiempos libres -Gobierno Federal.</p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <p style="padding:20px;"></p>
                    <img src="img/doctores.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                <a type="button" class="btn btn-warning btn-block"
                    data-toggle="tooltip" title="Or Call us at +852 12345678"
                     data-placement="bottom" href="#registrar">Hacerme médico</a>
                </div>
            </div>
        </div>
    </header>

<div class="container">
        <div class="row row-content">
           <div class="col-xs-12">
               <div id="mycarousel" class="carousel slide" data-ride="carousel">
                   
                   <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                   
                   <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" height=32 width=2100 
                         src="img/marginadas.jpg" alt="Uthappizza">
                        <div class="carousel-caption">
                        <h2>Apoya a comunidades marginadas  <!--<span class="label label-danger">Hot</span> <span class="badge">$4.99</span>--></h2>
                        <p>Muchas de nuestras comunidades Mexicanas necesitan de tu apoyo. Con Seguro en linea tienes la oportunidad de ayudar a todas estas personas desde la comunidad </p>
                        <p><input type="button" value="More &raquo;" class="btn btn-primary btn-xs"></p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" height=4 width=2000 
                         src="img/proveedor.png" alt="Grand Buffet">
                        <div class="carousel-caption">
                        <h2>Unete a la comunidad de doctores y enfermeras ayudantes </h2>
                         <p>Cientos de doctores y enfermeras ya estan apoyando en la salud de comunidades desde la comonidad de sus casas
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive"
                         src="img/alberto.png" alt="Alberto">
                        <div class="carousel-caption">
                         <h2>Alberto Somayya</h2>
                        <h4>Doctor Certificado</h4>
                        <p>Egresado de la Universidad Nacional Autonoma de Mexico. Es nuestro doctor con mayor consultas hechas en linea con alrededor. No te dejes engañar por su apariencia Indú ¡Es 100% Mexicano!
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                </div>
                   
                   
                   <!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                   
                   <div class="btn-group" id="carouselButtons">
                    <button class="btn btn-danger btn-xs" id="carousel-pause">
                	    <span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-danger btn-xs" id="carousel-play">
                	    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </button>
                </div>
                   
               </div>
            </div>
       </div>
        
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Ventajas buenas, pero no como la satisfaccion de ayudar.</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/icono2.jpg" height=500 width=200 alt="icono2">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Ventajas de trabajar en linea <span class="label label-danger">$$$</span> <span class="badge"></span> </h2>
                        <p>Recibe una pequeña remuneracion economica consultando desde la comunidad de tu casa. </p>
                        <p><input type="checkbox" ng-model="dinero">Leer mas&raquo;</p>
                        <p ng-show="dinero">Recibe $50 MX por cada cliente satisfecho consultado en linea, que será agregado a tu cuenta por medio de tu cédula para que lo puedas gastar (cambios sujetos sin previo aviso) -Gobierno Federal.</p>
                    </div>
                </div>
            </div>
        </div>


       <!-- <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>This Month's Promotions</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
               <div class="media">
                    
                    <div class="media-body">
                        <h3 class="media-heading">Weekend Grand Buffet <span class="label label-danger">New</span></h3>
                        
                        <p ng-hide="promociones">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person .
                         </p>
                        <p><input type="checkbox" ng-model="promociones">Less &raquo;</p>
                    </div>
                   
                   <div class="media-right media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/buffet.png" alt="Grand Buffet">
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>-->

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Conoce nuestros especialistas</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/alberto.png" height=500 width=200 alt="Alberto Somayya">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Doctor Certificado</h4>
                        <p>Egresado de la Universidad Nacional Autonoma de Mexico. Es nuestro doctor con mayor consultas hechas en linea con alrededor. No te dejes engañar por su apariencia Indú ¡Es 100% Mexicano!
                         </p>
                        <p><input type="checkbox" ng-model="chef">Leer mas&raquo;</p>
                        <p ng-show="chef">Ganate una plaza en este lugar consiguiendo varias consultas durante un buen periodo de diempo y 
                        se conocido por tu volutad de ayudar</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row row-content" id="registrar">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>Hazte doctor</h3>
            </div>
                <div class="col-xs-12 col-sm-9">
                <form class="form-horizontal" role="form">
                    <!--<div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Numero de Invitados</label>                       
                        <div class="col-sm-10">
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label><label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label><label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label><label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2"> 4
                            </label><label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option2"> 5
                            </label><label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option2"> 6
                            </label>
                        </div>
                    </div>-->
                    
                    <!--<div class="form-group">
                        <label for="DateTime" class="col-xs-12 col-sm-2 control-label">Date and Time.</label>                        
                        <div class="col-xs-4 col-sm-4 col-md-3">
                               <div class="form-group">
                               <label	class="sr-only"	for=”date">Date</label>
                               <input	type="text"	class="form-control"	id=”date"	placeholder="Date">
                               </div> 		
                        </div>
                        
                        <div class="col-xs-offset-1 col-xs-6 col-sm-5">
                            <div	class="form-group">
                            <label	class="sr-only"	for=”time">Time </label>
                            <input	type="text"	class="form-control"	id=”time"	placeholder="Time">
                            </div>
                        </div>
                    </div>-->
                    <div class="form-group" class="forma" ng-controller="formu">
                        
                            <form action="/action_page.php" method="post">
                                 Nombre: <input type="text" placeholder="Nombre completo" name="nombre" size=60 required><br>
                                  Username: <input type="text" placeholder="Nombre de usuario" name="username" size=60 required><br>
                                   Correo e: <input type="email" placeholder="Correo" name="correo" ng-model="persons.email" required > <span ng-show="emailInvalid"><br/>Por favor ingrese un correo valido</span><br>
                                   Contraseña: <input type="password" placeholder="Contraseña" name="contraseña" size=60 required><br>
                                    Cédula Prof: <input type="text" placeholder="Cedula Profecional" name="cedula" required><br>
                                
                                <button  type="submit" class="btn btn-primary" value="Submit" > Registrar</button>
                                
                            </form>
                        
                    </div>
                    
                    
                    <div class="form-group">
                        <div	class="alert	alert-warning	alert-dismissible"	role="alert">		<button	type="button"	class="close"				data-dismiss="alert"	aria-label="Close">			<span	aria-hidden="true">&times;</span>		</button>		<strong>Warning:</strong>	<!--<a	href="tel:+85212345678"	class="alert-link">		call</a>-->	Su correo tendrá que ser verificado	</div>	

                    </div>
        
               </form>
            </div>
        </div>
        
       
        
    </div>

</div>