<?php

class Production
{
  public function __construct(public string $title, public string $language, public int $vote)
  {
  }
}

$productionInstance_1 = new Production("Dune", "english", 7);
$productionInstance_2 = new Production("Bienvenue chez les Ch'tis", "french", 6);
$productionInstance_3 = new Production("La vita è bella", "italian", 8);


var_dump($productionInstance_1);

var_dump($productionInstance_2);

var_dump($productionInstance_3);
