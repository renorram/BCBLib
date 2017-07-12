<?php

/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:44
 */

use BCB\BCBWebservice;

class BCBWebserviceTest extends PHPUnit_Framework_TestCase {

  public function testBCBInstance() {
    $soap = BCBWebservice::getInstance();

    $this->assertInstanceOf('\BCB\BCBWebservice', $soap);
  }

  public function testGetUltimoValorVO() {
    $soap = BCBWebservice::getInstance();

    $this->assertInstanceOf('stdClass', $soap->getUltimoValorVO(1));

  }

  public function testGetUltimoValorXML() {
    $soap = BCBWebservice::getInstance();

    $value = $soap->getUltimoValorXML(1);

    $this->assertInternalType('string', $value);

    $this->assertStringStartsWith('<?xml version=\'1.0\' encoding=\'ISO-8859-1\'?>', $value);

  }

  public function testGetValoresSeriesVO() {
    $soap = BCBWebservice::getInstance();

    $this->assertInternalType('array', $soap->getValoresSeriesVO([1], '10/02/2016', date('d/m/Y')));

  }

  public function testGetValoresSeriesXML() {
    $soap = BCBWebservice::getInstance();

    $value = $soap->getValoresSeriesXML([1], '10/02/2016', date('d/m/Y'));

    $this->assertInternalType('string', $value);

    $this->assertStringStartsWith('<?xml version=\'1.0\' encoding=\'ISO-8859-1\'?>', $value);

  }
}