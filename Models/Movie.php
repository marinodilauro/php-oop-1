<?php

class Movie extends Production
{
  // Constructor
  public function __construct(public int $profit, public int $duration)
  {
  }
}
