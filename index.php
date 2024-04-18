<?php

class Production
{
  public $title;
  public $language;
  public $vote;
}

$productionInstance_1 = new Production();
$productionInstance_2 = new Production();
$productionInstance_3 = new Production();


$productionInstance_1->title = "Dune";
$productionInstance_1->language = "english";
$productionInstance_1->vote = 7;
var_dump($productionInstance_1);

$productionInstance_2->title = "Bienvenue chez les Ch'tis";
$productionInstance_2->language = "french";
$productionInstance_2->vote = 6;
var_dump($productionInstance_2);

$productionInstance_3->title = "La vita è bella";
$productionInstance_3->language = "italian";
$productionInstance_3->vote = 8;
var_dump($productionInstance_3);
