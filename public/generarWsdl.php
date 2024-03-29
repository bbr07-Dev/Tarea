<?php

    require '../vendor/autoload.php';
    require '../src/Operaciones.php';

    use PHP2WSDL\PHPClass2WSDL;
    $class = "Barbara\\Tarea\\Operaciones";
    $uri = 'http://localhost/servidorSoap/servicioW.php';
    $wsdlGenerator = new PHPClass2WSDL($class, $uri);
    $wsdlGenerator->generateWSDL(true);
    $fichero = $wsdlGenerator-> save('../servidorSoap/servicio.wsdl');

?>