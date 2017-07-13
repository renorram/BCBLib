<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 13/07/17
 * Time: 17:56
 */

namespace BCB;


class Retriever {
  private $debug = false;
  private $webservice;
  private $taxes = [];

  public function __construct($options = []) {
    if(isset($options['debug']) && is_bool($options['debug'])) {
      $this->debug = $options['debug'];
    }

    $this->webservice = Webservice::getInstance();
  }

  public function getAvailableSeries() {

  }
}