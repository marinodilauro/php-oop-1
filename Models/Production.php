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
