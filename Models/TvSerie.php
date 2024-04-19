<?php

class TvSerie extends Production
{
  // Constructor
  public function __construct($title, $language, $vote, $genre, public int $numberOfSeason)
  {
    parent::__construct($title, $language, $vote, $genre);
  }
}
