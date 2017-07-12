<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 12/07/17
 * Time: 19:23
 */

namespace BCB\ExternalSector\ExchangeRates;


abstract class AbstractRate {
  private $data = array();

  /**
   * @return array
   */
  public function getData() {
    return $this->data;
  }

  /**
   * @param array $data
   */
  public function setData(array $data) {
    $this->data = $data;
  }

  /**
   * Get the currency wich the rate is marketed.
   * @param $rate
   *
   * @return mixed
   */
  public function getCurrency($rate) {
    return preg_replace('/([\/])|(u.m.c.)/', '', $rate['unidadePadrao']);
  }

  /**
   * Get rate by oid, in case none rate be found it returns false.
   * @param $oid
   *
   * @return bool|array
   */
  public function getByOid($oid) {
    if(!is_int($oid)) {
      throw new \InvalidArgumentException('Parameter oid must be an integer.');
    }

    foreach ($this->getData() as $rate) {
      if($oid === $rate['oid']){
        return $rate;
      }
    }

    return false;
  }

  public function checkDateIsntBeforeInit($date, $rate) {
    
  }

}