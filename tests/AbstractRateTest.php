<?php

/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 12/07/17
 * Time: 19:50
 */

class AbstractRateTest extends PHPUnit_Framework_TestCase{
  public function testGetCurrency() {

    $foo_rate = ['oid' => 21623,
      'nomeAbreviado' => 'Libra esterlina (venda)',
      'unidadePadrao' => 'R$/u.m.c.',
      'periodicidadeSigla' => 'D',
      'dataInicio' => '01/07/1994'
    ];

    $stub = $this->getMockForAbstractClass('\BCB\ExternalSector\ExchangeRates\AbstractRate');
    $stub->expects($this->any())
      ->method('getCurrency')
      ->will($this->returnValue(TRUE));

    $data = $stub->getData();
    $this->assertInternalType('array', $data);
    $this->assertInternalType('string', $stub->getCurrency($foo_rate));
    $this->isFalse($stub->getByOid(1));

  }
}