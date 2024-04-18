<?php

class Production
{
  public static $isPlaying;

  // Constructor
  public function __construct(public string $title, public string $language, public int $vote, public Genre $genre)
  {
  }

  // Methods
  public function playPause()
  {
    $this->isPlaying = true;
    echo 'Playing ' .  $this->title;
    var_dump($this->isPlaying);

    if ($this->isPlaying) {
      $this->isPlaying = false;
      echo 'Pausing ' .  $this->title;
      var_dump($this->isPlaying);
    }
  }
}
