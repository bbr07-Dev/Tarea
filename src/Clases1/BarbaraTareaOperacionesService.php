<?php

namespace Barbara\Tarea\Clases1;

class BarbaraTareaOperacionesService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xampp/Tarea/servidorSoap/servicio.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param int $codigoProducto
     * @return float
     */
    public function getPVP($codigoProducto)
    {
      return $this->__soapCall('getPVP', array($codigoProducto));
    }

    /**
     * @param int $codigoProducto
     * @param int $codTienda
     * @return int
     */
    public function getStock($codigoProducto, $codTienda)
    {
      return $this->__soapCall('getStock', array($codigoProducto, $codTienda));
    }

    /**
     * @return Array
     */
    public function getFamilias()
    {
      return $this->__soapCall('getFamilias', array());
    }

    /**
     * @param string $codFamilia
     * @return Array
     */
    public function getProductosFamilia($codFamilia)
    {
      return $this->__soapCall('getProductosFamilia', array($codFamilia));
    }

}
