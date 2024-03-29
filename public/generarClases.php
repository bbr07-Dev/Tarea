<?php
    require '../vendor/autoload.php';
    
    use Wsdl2PhpGenerator\Generator;
    use Wsdl2PhpGenerator\Config;

    $generator = new Generator();
    $generator->generate (
        new Config([
            'inputFile' => "http://localhost/xampp/Tarea/servidorSoap/servicio.wsdl",
            'outputDir' => '../src/Clases1',
            'namespaceName' => "Barbara\\Tarea\\Clases1"
        ])
    )

?>