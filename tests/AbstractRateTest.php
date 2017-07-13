<?php

/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 12/07/17
 * Time: 19:50
 */
class AbstractRateTest extends PHPUnit_Framework_TestCase {

  private $fooRate = [
    'oid' => 21623,
    'nomeAbreviado' => 'Libra esterlina (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ];

  private $invalidData = [
    'oid' => 'aaaa',
    'nomeAbreviado' => FALSE,
    'unidadePadrao' => 1,
    'periodicidadeSigla' => 1.2,
    'dataInicio' => [],
  ];

  /** @var \PHPUnit_Framework_MockObject_MockObject */
  private $stub;

  public function __construct($name = NULL, array $data = [], $dataName = '') {
    parent::__construct($name, $data, $dataName);
    $this->stub = $this->getMockForAbstractClass('\BCB\Rates\AbstractRate');
  }

  /**
   * @expectedException \InvalidArgumentException
   */
  public function testSetDataEmptyArray() {
    $this->stub->setData([]);
  }

  /**
   * Set data must receveive an array with array elements
   * following test verify if wrong structure returns an exception
   *
   * @expectedException \InvalidArgumentException
   */
  public function testSetDataInvalidArray() {
    $this->stub->setData($this->fooRate);
  }

  /**
   * Check if the data on rate element is with right types.
   *
   * @expectedException \InvalidArgumentException
   */
  public function testSetDataInvalidData() {
    $this->stub->setData([$this->invalidData]);
  }

  /**
   * Test if the elements are out of order.
   *
   * @expectedException \InvalidArgumentException
   */
  public function testSetDataUnordered() {
    $this->stub->setData(array_reverse($this->invalidData));
  }

  public function testGetCurrency() {
    $this->assertInternalType('string', $this->stub->getCurrency($this->fooRate));
  }

  public function testGetByOid() {
    $this->stub->setData([$this->fooRate]);
    $this->assertInternalType('array', $this->stub->getByOid($this->fooRate['oid']));
    $this->assertFalse($this->stub->getByOid(1));
  }

  /**
   * @expectedException \InvalidArgumentException
   */
  public function testGetByOidInvalidData() {
    $this->stub->getByOid(FALSE);
  }

  /**
   * @expectedException \Exception
   */
  public function testValidateSearchDateException() {
    $this->stub->validateSearchDate(21, 12);
  }

  public function testValidateSearchDate() {
    $this->assertTrue($this->stub->validateSearchDate(new DateTime(), $this->fooRate));
  }
}