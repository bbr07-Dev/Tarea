<?php
    require '../vendor/autoload.php';
    require '../src/Operaciones.php';

    use PHP2WSDL\PHPClass2WSDL;
    $class = 'barbara\tarea\src\Operaciones';
    $uri = 'http://localhost:3000/servidorSoap/servicioW.php';
    $wsdlGenerator = new PHPClass2WSDL($class, $uri);
    $wsdlGenerator->generateWSDL(true);
    $fichero = $wsdlGenerator-> save('../servidorSoap/servicio.wsdl');

    ?>