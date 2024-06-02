<?php 

namespace Creature;

use LivingEntity\LivingEntity;

abstract class Creature extends LivingEntity {


    /**
    * @param String
    */
    public $color;

    /**
     * @param Int
     */
    protected $size;

    /**
     * @param String
     */
    protected $type;

    public function __construct($type, $color, $size) {
      $this->type = $type;
      $this->color = $color;
      $this->size = $size;
    }

    public function getColor(): string {
      return $this->color;
    }

    public function getType() : string {
      return $this->type;
    }

    public function getSize() : int {
      return $this->size;
    }

}
