<?php

class Production
{
  public static $isPlaying = false;

  // Constructor
  public function __construct(public string $title, public string $language, public int $vote)
  {
  }

  // Methods
  public function playPause()
  {
    if (!$this->isPlaying) {
      $this->isPlaying = true;
      echo 'Playing ' .  $this->title;
    } else {
      $this->isPlaying = false;
      echo 'Pausing ' .  $this->title;
    }
  }
}

$productionInstance_1 = new Production("Dune", "english", 7);
$productionInstance_2 = new Production("Bienvenue chez les Ch'tis", "french", 6);
$productionInstance_3 = new Production("La vita è bella", "italian", 8);


var_dump($productionInstance_1);

var_dump($productionInstance_2);

var_dump($productionInstance_3);

$productionInstance_1->playPause();
echo '<br>';
$productionInstance_1->playPause();
echo '<br>';
$productionInstance_1->playPause();
echo '<br>';
$productionInstance_1->playPause();
