<?php

namespace Animal;

use Creature\Creature;
use Behaves\Behaves;

class Animal extends Creature implements Behaves {

    /**
     * @param
     */
    public $habitat;

      /**
     * @param String
     */
    protected $move;

    public function __construct($type, $color, $habitat, $size) {
        parent::__construct($type, $color, $size);
        $this->habitat = $habitat;
    }

    public function makeSound($sound): string
    {
        return $this->$sound;
    }

    public function feed($food): string
    {
        return $this->$food;
    }

   public function movement($move): string
   {
    return $this->$move;
   }
}