<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:54
 */
include_once '../vendor/autoload.php';

$bcb = \BCB\BCBWebservice::getInstance(['debug' => TRUE]);
print_r($bcb->getValoresSeriesVO([3691], '10/03/2016', '10/05/2017'));
//print_r($bcb->getFunctions());
//print_r($bcb->getUltimoValorVO(1));
$data = [
  [
    'oid' => 1,
    'nomeAbreviado' => 'Dólar comercial (venda)',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '28/11/1984',
  ],
  [
    'oid' => 3691,
    'nomeAbreviado' => 'Dólar americano (compra) - fim de período - 3691',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'A',
    'dataInicio' => '31/12/1942',
  ],
  [
    'oid' => 3692,
    'nomeAbreviado' => 'Dólar americano (venda) - fim de período - 3692',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'A',
    'dataInicio' => '31/12/1942',
  ],
  [
    'oid' => 3693,
    'nomeAbreviado' => 'Dólar americano (compra) - média de período - 3693',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'A',
    'dataInicio' => '31/12/1942',
  ],
  [
    'oid' => 3694,
    'nomeAbreviado' => 'Dólar americano (venda) - média de período - 3694',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'A',
    'dataInicio' => '31/12/1942',
  ],
  [
    'oid' => 3695,
    'nomeAbreviado' => 'Dólar americano (compra) - fim de período - 3695',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'M',
    'dataInicio' => '31/01/1953',
  ],
  [
    'oid' => 3696,
    'nomeAbreviado' => 'Dólar americano (venda) - fim de período - 3696',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'M',
    'dataInicio' => '31/01/1953',
  ],
  [
    'oid' => 3697,
    'nomeAbreviado' => 'Dólar americano (compra) - média de período - 3697',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'M',
    'dataInicio' => '31/01/1953',
  ],
  [
    'oid' => 3698,
    'nomeAbreviado' => 'Dólar americano (venda) - média de período - 3698',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'M',
    'dataInicio' => '31/01/1953',
  ],
  [
    'oid' => 10813,
    'nomeAbreviado' => 'Dólar comercial (compra)',
    'unidadePadrao' => 'u.m.c./US$',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '28/11/1984',
  ],
  [
    'oid' => 21619,
    'nomeAbreviado' => 'Euro (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '31/12/1998',
  ],
  [
    'oid' => 21620,
    'nomeAbreviado' => 'Euro (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '31/12/1998',
  ],
  [
    'oid' => 21621,
    'nomeAbreviado' => 'Iene (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21622,
    'nomeAbreviado' => 'Iene (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21623,
    'nomeAbreviado' => 'Libra esterlina (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21624,
    'nomeAbreviado' => 'Libra esterlina (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21625,
    'nomeAbreviado' => 'Franco Suíço (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21626,
    'nomeAbreviado' => 'Franco Suíço (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21627,
    'nomeAbreviado' => 'Coroa Dinamarquesa (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21628,
    'nomeAbreviado' => 'Coroa Dinamarquesa (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21629,
    'nomeAbreviado' => 'Coroa Norueguesa (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21630,
    'nomeAbreviado' => 'Coroa Norueguesa (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21631,
    'nomeAbreviado' => 'Coroa Sueca (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21632,
    'nomeAbreviado' => 'Coroa Sueca (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21633,
    'nomeAbreviado' => 'Dólar Australiano (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21634,
    'nomeAbreviado' => 'Dólar Australiano (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21635,
    'nomeAbreviado' => 'Dólar Canadense (venda)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
  [
    'oid' => 21636,
    'nomeAbreviado' => 'Dólar Canadense (compra)',
    'unidadePadrao' => 'R$/u.m.c.',
    'periodicidadeSigla' => 'D',
    'dataInicio' => '01/07/1994',
  ],
];