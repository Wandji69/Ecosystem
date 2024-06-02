<?php

namespace Insect;

use Creature\Creature;
use Behaves\Behaves;

class Insect extends Creature implements Behaves {
  public $size;
  public $habitat;

  public function __construct($type, $color, $size, $habitat) {
    parent::__construct($type, $color, $size);
    $this->size = $size;
    $this->habitat = $habitat;
  }

  public function makeSound($sound): string {
    return $this->$sound;
  }

  public function feed($food): string {
    return $this->$food;
  }

  public function movement($move): string
  {
    return $this->$move;
  }

}