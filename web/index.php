<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:54
 */
include_once '../vendor/autoload.php';
echo "<pre>";
$bcb = \BCB\BCBWebservice::getInstance();

print_r($bcb->getFunctions());
//print_r($bcb->getUltimoValorVO(1));