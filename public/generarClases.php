<?php
    require '../vendor/autoload.php';
    
    use Wsdl2PhpGenerator\Generator;
    use Wsdl2PhpGenerator\Config;

    $generator = new Generator();
    $generator->generate (
        new Config([
            'inputFile' => "Barbara\\Tarea\\servidorSoap\\servicios.wsdl",
            'outputDir' => '../src/Clases1',
            'namespaceName' => 'Clases'
        ])
    )

?>