<?php

class Production
{
  // Variables
  public static $isSeen = false;

  // Constructor
  public function __construct(public string $title, public string $language, public int $vote, public Genre $genre)
  {
  }

  // Methods
  public function playPause()
  {
    $this->isSeen = true;
    echo $this->title . ' was seen';
    var_dump($this->isSeen);
  }
}
