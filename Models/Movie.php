<?php

class Movie extends Production
{
  // Constructor
  public function __construct($title, $language, $vote, $genre, public string $profit, public int $duration)
  {
    parent::__construct($title, $language, $vote, $genre);
  }
}
