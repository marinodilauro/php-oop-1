<?php

class Movie extends Production
{
  // Constructor
  public function __construct($title, $language, $vote, $genre, public int $profit, public int $duration)
  {
    parent::__construct($title, $language, $vote, $genre);
  }
}
