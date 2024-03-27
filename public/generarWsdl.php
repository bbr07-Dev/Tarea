<?php

    require '../vendor/autoload.php';

    use PHP2WSDL\PHPClass2WSDL;
    $class = "src\\Operaciones";
    $uri = 'http://localhost:3000/servidorSoap/serviciorW.php';
    $wsdlGenerator = new PHPClass2WSDL($class, $uri);
    $wsdlGenerator->generateWSDL(true);
    $fichero = $wsdlGenerator-> save('../servidorSoap/servicio.wsdl');