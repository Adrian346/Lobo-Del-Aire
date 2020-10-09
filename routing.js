var app = angular.module('app', ['ngRoute']);
app.config(function ($routeProvider) {
// configure the routes
$routeProvider
.when('/', {
// route for the home page
templateUrl: 'pages/home.php',
controller: 'indexController'
})
.when('/agregarProveedor', {
// route for the contact page
templateUrl: 'pages/agregarProveedor.php',
controller: 'agregarProveedorController'
})
.when('/agregarFacturaCompra', {
// route for the contact page
templateUrl: 'pages/agregarFacturaCompra.php',
controller: 'agregarFacturaCompraController'
})
.when('/agregarDetalleCompra', {
// route for the contact page
templateUrl: 'pages/agregarDetalleCompra.php',
controller: 'agregarDetalleCompraController'
})
.when('/agregarDetalleDirectoCompra', {
// route for the contact page
templateUrl: 'pages/agregarDetalleDirectoCompra.php',
controller: 'agregarDetalleDirectoController'
})
.when('/consultarDetalleCompra', {
// route for the contact page
templateUrl: 'pages/consultarDetalleCompra.php',
controller: 'consultarDetalleCompraController'
})
.when('/consultarProveedor', {
// route for the contact page
templateUrl: 'pages/consultarProveedor.php',
controller: 'consultarProveedorController'
})
.when('/consultarFacturaCompra', {
// route for the contact page
templateUrl: 'pages/consultarFacturaCompra.php',
controller: 'consultarFacturaCompraController'
})
.when('/agregarProducto', {
// route for the contact page
templateUrl: 'pages/agregarProducto.php',
controller: 'agregarProductoController'
})
.when('/consultarProducto', {
// route for the contact page
templateUrl: 'pages/consultarProducto.php',
controller: 'consultarProductoController'
})
.when('/agregarDetalleCompraPrueba', {
// route for the contact page
templateUrl: 'pages/agregarDetalleCompraPrueba.php',
controller: 'agregarDetalleCompraPruebaController'
})
.when('/agregarCliente', {
// route for the contact page
templateUrl: 'pages/agregarCliente.php',
controller: 'agregarClientectl'
})
.when('/consultarCliente', {
// route for the contact page
templateUrl: 'pages/consultarCliente.php',
controller: 'consultarClientectl'
})
.when('/cambiosCliente', {
// route for the contact page
templateUrl: 'pages/cambiosCliente.php',
controller: 'cambiosClientectl'
})
.when('/agregarEmpleado', {
// route for the contact page
templateUrl: 'pages/agregarEmpleado.php',
controller: 'agregarEmpleadoctl'
})
.when('/consultarEmpleado', {
// route for the contact page
templateUrl: 'pages/consultarEmpleado.php',
controller: 'consultarEmpleadoctl'
})
.when('/cambiosEmpleado', {
// route for the contact page
templateUrl: 'pages/cambiosEmpleado.php',
controller: 'cambiosEmpleadosctl'
})
.when('/formu', {
// route for the contact page
templateUrl: 'pages/formu.php',
controller: 'formu'
})
.when('/agregarFacturaVenta', {
// route for the contact page
templateUrl: 'pages/agregarFacturaVenta.php',
controller: 'agregarFacturaVentaController'
})
.when('/agregarDetalleVenta', {
// route for the contact page
templateUrl: 'pages/agregarDetalleVenta.php',
controller: 'agregarDetalleVentaController'
})
.when('/agregarDetalleDirectoVenta', {
// route for the contact page
templateUrl: 'pages/agregarDetalleDirectoVenta.php',
controller: 'agregarDetalleDirectoVentaController'
})
.when('/consultarDetalleVenta', {
// route for the contact page
templateUrl: 'pages/consultarDetalleVenta.php',
controller: 'consultarDetalleVentaController'
})
.when('/consultarFacturaVenta', {
// route for the contact page
templateUrl: 'pages/consultarFacturaVenta.php',
controller: 'consultarFacturaVentaController'
})
.when('/mostrarFacturaProductoComprado', {
// route for the contact page
templateUrl: 'pages/mostrarFacturaProductoComprado.php',
controller: 'mostrarFacturaProductoCompradoController'
})
.when('/mostrarProductoFacturaComprado', {
// route for the contact page
templateUrl: 'pages/mostrarProductoFacturaComprado.php',
controller: 'mostrarProductoFacturaCompradoController'
})
.when('/mostrarProductoProveedorComprado', {
// route for the contact page
templateUrl: 'pages/mostrarProductoProveedorComprado.php',
controller: 'mostrarProductoProveedorCompradoController'
}) 
.when('/mostrarClientesEmpleadoVenta', {
// route for the contact page
templateUrl: 'pages/mostrarClientesEmpleadoVenta.php',
controller: 'mostrarClientesEmpleadoVentaController'
}) 
.when('/mostrarEmpleadosClienteVenta', {
// route for the contact page
templateUrl: 'pages/mostrarEmpleadosClienteVenta.php',
controller: 'mostrarEmpleadosClienteVentaController'
})
.when('/mostrarFacturasProductoVenta', {
// route for the contact page
templateUrl: 'pages/mostrarFacturasProductoVenta.php',
controller: 'mostrarFacturasProductoVentaController'
})
.when('/mostrarProductosFacturaVenta', {
// route for the contact page
templateUrl: 'pages/mostrarProductosFacturaVenta.php',
controller: 'mostrarProductosFacturaVentaController'
})
.when('/mostrarProductosClienteVenta', {
// route for the contact page
templateUrl: 'pages/mostrarProductosClienteVenta.php',
controller: 'mostrarProductosClienteVentaController'
})
.when('/mostrarProductosEmpleadoVenta', {
// route for the contact page
templateUrl: 'pages/mostrarProductosEmpleadoVenta.php',
controller: 'mostrarProductosEmpleadoVentaController'
})
.when('/mostrarClienteProductoProveedor', {
// route for the contact page
templateUrl: 'pages/mostrarClienteProductoProveedor.php',
controller: 'mostrarClienteProductoProveedorController'
})
.otherwise({
// when all else fails
templateUrl: 'pages/routeNotFound.html',
controller: 'notFoundController'
});

});



app.controller('indexController', function ($scope) {
$scope.message = '¡Bienvenido a la pagina de inicio!';
});
app.controller('aboutController', function ($scope) {
$scope.message = 'Arma tu equipo con los mejores jugadores de la liga';
});
app.controller('contactController', function ($scope) {
$scope.message = '¡Pon a prueba tus conocimientos sobre fucho!';
});
app.controller('sugerenciasController', function ($scope) {
$scope.message = '¡Queremos saber tu opinion!';
});
app.controller('calendarioController', function ($scope) {
$scope.message = '¡Calendario Actualizado!';
});
app.controller('medicoController', function ($scope) {
$scope.message = '¡Medico Actualizado!';
});
app.controller('EnfermeraController', function ($scope) {
$scope.message = '¡Medico Actualizado!';
});
app.controller('SignupMedicoController', function ($scope) {
$scope.message = '¡SignupMedico Actualizado!';
});
app.controller('SignupEnfermeraController', function ($scope) {
$scope.message = '¡SignupEnfermera Actualizado!';
});
app.controller('databaseController', function ($scope) {
$scope.message = '¡Database Actualizado!';
});
app.controller('logoutController', function ($scope) {
$scope.message = '¡Logout Actualizado!';
});
app.controller('consultasMedico', function ($scope) {
$scope.message = '¡consultasMedico Actualizado!';
});
app.controller('receta', function ($scope) {
$scope.message = '¡receta Actualizado!';
});
app.controller('Videollamada', function ($scope) {
$scope.message = '¡Videollamada Actualizado!';
});
app.controller('actualizarPaciente', function ($scope) {
$scope.message = '¡actualizarPaciente Actualizado!';
});
app.controller('agregarProveedorController', function ($scope) {
$scope.message = 'Agrego Proveedor';
});
app.controller('agregarFacturaCompraController', function($scope) {
$scope.message = 'Factura Compra';
});
app.controller('agregarDetalleCompraController', function($scope) {
$scope.message = 'Detalle Compra';
});
app.controller('cambios1_ProveedorController', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('agregarClientectl', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('consultarClientectl', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('cambiosClientectl', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('agregarEmpleadoctl', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('cambiosEmpleadosctl', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('consultarEmpleadoctl', function($scope) {
$scope.message = 'Consultar Proveedor';
});
app.controller('formu', function($scope) {
$scope.message = 'Consultar formulario';
});
app.controller('mostrarFacturaProductoCompradoController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarProductoFacturaCompradoController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarProductoProveedorCompradoController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarClientesEmpleadoVentaController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarEmpleadosClienteVentaController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarFacturasProductoVentaController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarProductosFacturaVentaController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarProductosClienteVentaController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarProductosEmpleadoVentaController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('mostrarClienteProductoProveedorController', function($scope) {
$scope.message = 'Consultar Factura Producto';
});
app.controller('notFoundController', function ($scope) {
$scope.message = 'There seems to be a problem finding the page you wanted';
//$scope.attemptedPath = $location.path();

});