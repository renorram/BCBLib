<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:43
 */

namespace BCB;


use Symfony\Component\Debug\Debug;

class BCBWebservice {

  /** @var \SoapClient $soap */
  private $soap;

  protected $debug;

  const WSDL_URL = 'https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl?WSDL';

  private static $instance;

  public function __construct($wsdl, $options = [], $debug = FALSE) {
    $this->debug = $debug;
    // enable or not debug mode
    if ($this->debug) {
      Debug::enable();
    }

    try {

      $this->checkDependencies();

      $this->soap = new \SoapClient($wsdl, $options);

    } catch (\Exception $exception) {
      if ($this->debug) {
        throw $exception;
      }
    }
  }

  private function checkDependencies() {
    if (!version_compare(PHP_VERSION, '7.0.0', '<')) {
      throw new \Exception('Not compatible with PHP 7 Soap');
    }

    if (!class_exists('SoapClient')) {
      throw new \Exception('SoapClient library not loaded.');
    }
  }

  private function request($methodName, $data = []) {
    try {
      $result = $this->soap->__soapCall($methodName, $data);
    } catch (\Exception $exception) {
      throw $exception;
    }

    return $result;
  }

  /**
   * Get class instance
   *
   * @param array $options
   *
   * @return \BCB\BCBWebservice
   */
  public static function getInstance($options = []) {
    if (NULL === self::$instance) {
      $debug = FALSE;
      if (isset($options['debug'])) {
        $debug = $options['debug'];
        unset($options['debug']);
      }

      self::$instance = new BCBWebservice(self::WSDL_URL, $options, $debug);

    }

    return self::$instance;
  }

  public function getValoresSeriesVO($codigosSeries, $dataInicio, $dataFim) {
    if (!is_array($codigosSeries) || (is_array($codigosSeries) && empty($codigosSeries))) {
      throw new \InvalidArgumentException('Parameter codigoSerie is not an array or is empty.');
    }

    if (!is_string($dataFim)) {
      throw new \InvalidArgumentException('Paremeter dataInicio isn\'t not a string');
    }

    if (!is_string($dataFim)) {
      throw new \InvalidArgumentException('Paremeter dataFim isn\'t not a string');
    }

    $data = [
      'codigosSeries' => $codigosSeries,
      'dataInicio' => $dataInicio,
      'dataFim' => $dataFim,
    ];

    return $this->request('getValoresSeriesVO', $data);
  }

  public function getValoresSeriesXML($codigosSeries, $dataInicio, $dataFim) {
    if (!is_array($codigosSeries) || (is_array($codigosSeries) && empty($codigosSeries))) {
      throw new \InvalidArgumentException('Parameter codigoSerie is not an array or is empty.');
    }

    if (!is_string($dataFim)) {
      throw new \InvalidArgumentException('Paremeter dataInicio isn\'t not a string');
    }

    if (!is_string($dataFim)) {
      throw new \InvalidArgumentException('Paremeter dataFim isn\'t not a string');
    }

    $data = [
      'codigosSeries' => $codigosSeries,
      'dataInicio' => $dataInicio,
      'dataFim' => $dataFim,
    ];

    return $this->request('getValoresSeriesXML', $data);
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