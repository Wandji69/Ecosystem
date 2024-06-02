<?php

namespace EcosystemTest;

use Animal\Animal as Animal;
use Plant\Plant as Plant;
use Insect\Insect as Insect;

class EcosystemTest {

    public function testLivingEntity() {
    $animal = new Animal("Lion", "Yellow", "Savanna", 'large');
    $plant = new Plant("Tree", "Green", "Provides oxygen", "Forest", 'medium');
    $insect = new Insect("Bee", "Yellow and Black", "Small", "Meadow");

    echo $animal->makeSound('Raw') . PHP_EOL;
    echo $animal->feed('Plants & Animals') . PHP_EOL;
    echo $animal->movement('Walk') . PHP_EOL;
    echo $plant->getColor('Green') . PHP_EOL;
    echo $insect->makeSound('clik') . PHP_EOL;
    echo $insect->feed('leaves') . PHP_EOL;
    echo $insect->movement('creep') . PHP_EOL;
  }
}

$test = new EcosystemTest;
$test->testLivingEntity();