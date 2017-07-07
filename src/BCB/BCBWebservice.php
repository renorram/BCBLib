<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:43
 */

namespace BCB;


class BCBWebservice {

  /** @var \SoapClient $soap */
  private $soap;

  const WSDL_URL = 'https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl?WSDL';

  private static $instance;

  public function __construct($wsdl, $options = []) {
    if (!$this->checkPHPVersion()) {
      throw new \Exception('Not compatible with PHP 7 Soap');
    }

    if (!class_exists('SoapClient')) {
      throw new \Exception('SoapClient library not loaded.');
    }

    $this->soap = new \SoapClient($wsdl, $options);
  }

  private function checkPHPVersion() {
    return version_compare(PHP_VERSION, '7.0.0', '<');
  }

  private function request($methodName, $data = []) {
    try {
      $result = $this->soap->__soapCall($methodName, $data);
    } catch (\Exception $exception) {
      throw $exception;
    }

    return $result;
  }

  public function getFunctions() {
    return $this->soap->__getFunctions();
  }

  public static function getInstance() {
    if (NULL === self::$instance) {
      self::$instance = new BCBWebservice(self::WSDL_URL);
    }

    return self::$instance;
  }

  public function getUltimoValorVO($codigoSerie) {
    if (!is_int($codigoSerie)) {
      throw new \InvalidArgumentException('Parameter codigoSerie must be integer.');
    }

    $data = ['codigoSerie' => $codigoSerie];
    return $this->request('getUltimoValorVO', $data);
  }

  public function getUltimoValorXML($codigoSerie) {
    if (!is_int($codigoSerie)) {
      throw new \InvalidArgumentException('Parameter codigoSerie must be integer.');
    }

    $data = ['codigoSerie' => $codigoSerie];
    return $this->request('getUltimoValorXML', $data);
  }
}