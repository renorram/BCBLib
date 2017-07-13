<?php

/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:44
 */

use BCB\Webservice;

class WebserviceTest extends PHPUnit_Framework_TestCase {

  /** @var \BCB\Webservice */
  private $soap;

  public function __construct($name = NULL, array $data = [], $dataName = '') {
    parent::__construct($name, $data, $dataName);
    $this->soap = Webservice::getInstance();
  }

  public function testBCBInstance() {

    $this->assertInstanceOf('\BCB\Webservice', $this->soap);
  }

  public function testGetUltimoValorVO() {
    $this->assertInstanceOf('stdClass', $this->soap->getUltimoValorVO(1));
  }

  /**
   * @expectedException \InvalidArgumentException
   */
  public function testGetUltimoValorVOException() {
    $this->soap->getUltimoValorVO(FALSE);
  }

  public function testGetUltimoValorXML() {
    $value = $this->soap->getUltimoValorXML(1);
    $this->assertInternalType('string', $value);
    $this->assertStringStartsWith('<?xml version=\'1.0\' encoding=\'ISO-8859-1\'?>', $value);

  }

  /**
   * @expectedException \InvalidArgumentException
   */
  public function testGetUltimoValorXMLException() {
    $this->soap->getUltimoValorXML(FALSE);
  }

  public function testGetValoresSeriesVO() {
    $this->assertInternalType('array', $this->soap->getValoresSeriesVO([1], DateTime::createFromFormat('d/m/Y', '12/07/2017'), new DateTime()));
  }

  /**
   * @expectedException \InvalidArgumentException
   */
  public function testGetValoriesSeriesVOExceptions() {
    $this->assertInternalType('array', $this->soap->getValoresSeriesVO(13, DateTime::createFromFormat('d/m/Y', '12/07/2017'), new DateTime()));
  }

  public function testGetValoresSeriesXML() {

    $value = $this->soap->getValoresSeriesXML([1], DateTime::createFromFormat('d/m/Y', '12/07/2017'), new DateTime());

    $this->assertInternalType('string', $value);

    $this->assertStringStartsWith('<?xml version=\'1.0\' encoding=\'ISO-8859-1\'?>', $value);

  }

  /**
   * @expectedException \InvalidArgumentException
   */
  public function testGetValoriesSeriesXMLExceptions() {
    $this->assertInternalType('array', $this->soap->getValoresSeriesXML(13, DateTime::createFromFormat('d/m/Y', '12/07/2017'), new DateTime()));
  }
}