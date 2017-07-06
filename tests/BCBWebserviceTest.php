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
//            print_r($soap->getUltimoValorVO(1));

  }

  public function testGetUltimoValorXML() {
    $soap = BCBWebservice::getInstance();

    $value = $soap->getUltimoValorXML(1);

    $this->assertInternalType('string', $value);

    $this->assertStringStartsWith('<?xml version=\'1.0\' encoding=\'ISO-8859-1\'?>', $value);

    //    print_r($value );
  }
}