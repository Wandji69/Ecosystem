<?php

namespace Behaves;

interface Behaves {

  public function makeSound($sound): string;
  public function feed($food): string;
  public function movement($move) : string;
}

