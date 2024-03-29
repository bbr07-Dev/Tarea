<?php
    require '../src/Operaciones.php';

    $url = 'http://localhost/xampp/Tarea/servidorSoap/servicio.wsdl';

    try {
        ini_set("soap.wsdl_cache_enabled", "0");
    //Creamos un objeto SOAPSERVER sin WSDL
        $server = new SoapServer($url);

        //Agregamos la clase operaciones al servidor soap
        $server->setClass('Barbara\\Tarea\\Operaciones');
    
        //Manejamos la solicitud del cliente
        $server->handle();

    } catch (SoapFault $e){

        echo("Error en el server: " . $e->getMessage());

    }

    // echo "Servicio disponible...";

?>