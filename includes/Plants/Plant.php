<?php
namespace Plant;

use Creature\Creature;

class Plant extends Creature {
  public $use;
  public $site;

  public function __construct($type, $color, $use, $site, $size) {
    parent::__construct($type, $color, $size);
    $this->use = $use;
    $this->site = $site;
  }
}