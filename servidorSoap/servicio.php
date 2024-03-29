<?php
    require '../src/Operaciones.php';

    $uri = 'http://localhost/servidorSoap';

    try {
    //Creamos un objeto SOAPSERVER sin WSDL
        $server = new SoapServer(null, array('uri'=>$uri));

        //Agregamos la clase operaciones al servidor soap
        $server->setClass("Barbara\\Tarea\\Operaciones");
    
        //Manejamos la solicitud del cliente
        $server->handle();

    } catch (SoapFault $e){

        echo("Error en el server: " . $e->getMessage());

    }

    // echo "Servicio disponible...";

?>